<?php namespace App\Controllers\admin;

use CodeIgniter\Controller;
use App\Models\admin\AdminModel;

class Admin extends Controller
{
    protected $order,$uri,$request,$db;
    public function __construct() {
        //mengisi variable global dengan data
        $this->session = session();
        $this->AdminModel = new AdminModel(); 
		$this->request = \Config\Services::request(); //memanggil class request
        $this->uri = $this->request->uri; //class request digunakan untuk request uri/url
        // $this->session->set('uname_admin','mantab');
        // $this->session->set('id_admin','1');
        	//load service bawaan ci
		$this->request = \Config\Services::request(); 
		$this->session = \Config\Services::session();  //untuk membaca session 
		$this->db  = \Config\Database::connect(); //untuk melakukan CRUD ke databse
		$this->uri = $this->request->uri;
    }

    public function index()
    {
        echo 'URL Tidak Valid / Kurang Lengkap';
    }

    public function do_auth(){

        $data['email'] = $this->request->getPost('email');
        $data['password'] = md5($this->request->getPost('password'));
        $hasil = $this->AdminModel->get_admin($data);
        
        if(count($hasil) > 0)
        {
            // set session
            $sess_data = array('masukAdmin' => TRUE, 'uname_admin' => $hasil[0]->username, 'id_admin' => $hasil[0]->id);
            $this->session->set($sess_data);
            return redirect()->to(base_url('admin/dashboard'));
            exit();
        }
        else
        {
            $this->session->setFlashdata('errors', ['Password Salah']);
            return redirect()->to(base_url('/login'));
        }
		
    }
    
    public function do_unauth(){

        $this->session->destroy();
        return redirect()->to(base_url('/login'));
		
	}

    public function login()
    {
        if(session()->has('masukAdmin'))
        {
        	return redirect()->to(base_url('admin/dashboard'));
        }
        $data['title'] = 'Selamat Datang!';
        $data['view'] = 'admin/auth/login';
        return view('admin/auth/layout', $data);
    }

    public function dashboard()
    {
        $data['title'] = 'Admin Dashboard';
        $data['view'] = 'admin/index';
        $data['join'] = $this->AdminModel->get_all_join();
        $data['totalPending'] = $this->AdminModel->get_total_pending();
        $data['totalKeuntungan'] = $this->AdminModel->get_total_keuntungan();
        return view('admin/layout', $data);
    }

    public function pengguna()
    {
        $data['title'] = 'Data Pengguna';
        $data['view'] = 'admin/pengguna';
        $data['join'] = $this->AdminModel->get_all_join();
        // return json_encode($data['join']);
        return view('admin/layout', $data);
    }

    public function do_hapus_user(){

        $id = $this->request->getPost('id');

        $delete = $this->AdminModel->delete_user($id);
        if($delete){
            echo 'sukses';
            session()->setFlashdata("error", "Data telah dihapus");
        }else{
            echo 'error';
            $this->session->set_flashdata('error', 'Terjadi kesalahan');

        }

    }

    public function pembayaran(){
        $data['title'] = 'Data Pembayaran';
        $data['view'] = 'admin/pembayaran';
        $data['join'] = $this->AdminModel->get_all_join();
        return view('admin/layout', $data);
    }

    public function do_konfirmasi(){

        $id = $this->request->getPost('id');

        $update = $this->AdminModel->konfirmasi_user($id);
        if($update){
            echo 'sukses';
            session()->setFlashdata("success", "Status telah dirubah");
        }else{
            echo 'gagal';
        }
    }

    public function profil(){

        $data['admin'] = $this->AdminModel->get_admin_by_id();
        $data['title'] = 'Profil Admin';
        $data['view'] = 'admin/profil';
		return view('admin/layout', $data);
    }

    public function do_update_admin(){

        if($this->request->getPost('password') != ''){
            $data['password'] = md5($this->request->getPost('password'));
        }

        $data['username'] = $this->request->getPost('username');
        $data['nama_lengkap'] = $this->request->getPost('nama');
        $data['email'] = $this->request->getPost('email');

        $update = $this->AdminModel->update_admin($data);
        if($update){
            $this->session->set('uname_admin', $data['username']);
            echo 'sukses';
        }else{
            echo 'gagal';
        }
       
    }

    public function setting(){
        $data['setting'] = $this->AdminModel->get_setting();
        $data['title'] = 'Setting Web';
        $data['view'] = 'admin/setting';
		return view('admin/layout', $data);
    }

    public function do_update_setting(){

        $data['harga'] = $this->request->getPost('harga');
        $data['nama_bank'] = $this->request->getPost('bank');
        $data['nama_pemilik'] = $this->request->getPost('nama');
        $data['norek'] = $this->request->getPost('norek');

        $update = $this->AdminModel->update_setting($data);
        if($update){
            echo 'sukses';
            session()->setFlashdata("success", "Data telah dirubah");
        }else{
            echo 'gagal';
        }

    }

    public function edit_pengguna(){

        if($this->request->getMethod() == 'post'){
            $id = $this->request->getPost('id');
            $this->session->set('id_usernya', $id);
        }
        $data['title'] = 'Edit Pengguna';
        $data['view'] = 'admin/edit_pengguna';

        $data['user'] = $this->AdminModel->get_user_by_id_user();
        $data['fitur'] = $this->AdminModel->get_fitur_by_id_user();
        $data['acara'] = $this->AdminModel->get_acara_by_id_user();
        $data['mempelai'] = $this->AdminModel->get_mempelai_by_id_user();
        $data['cerita'] = $this->AdminModel->get_cerita_by_id_user(); 
        $data['album'] = $this->AdminModel->get_album_by_id_user();
        $data['data'] = $this->AdminModel->get_data_by_id_user();
        $data['order'] = $this->AdminModel->get_order_by_id_user();
        return view('admin/layout', $data);

    }

    public function do_update_user(){

        if($this->request->getPost('password') != ''){
            $data['password'] = md5($this->request->getPost('password'));
        }

        $data['username'] = $this->request->getPost('username');
        $data['email'] = $this->request->getPost('email');
        $data['hp'] = $this->request->getPost('hp');

        $update = $this->AdminModel->update_user($data);
        if($update){
            $this->session->set('uname', $data['username']);
            echo 'sukses';
            session()->setFlashdata("success", "Data telah dirubah");
        }else{
            echo 'gagal';
        }
       
    }

    public function do_update_cerita(){

        //HAPUS DULU SESSION SEBELUMNYA
        $jml_cerita_sebelumnya = $this->session->get('jml_cerita');

        for($i=0;$i<=$jml_cerita_sebelumnya;$i++){
            $this->session->remove('tanggal_cerita'.$i);
            $this->session->remove('judul_cerita'.$i);
            $this->session->remove('isi_cerita'.$i);
        }

        //SEBAGAI ARRAY PENANDA
        $noTanggal = 0;
        $noJudul = 0;
        $noIsi = 0;
        
        //KITA KUMPULKAN DAN SIMPAN DATANYA DI SESSION DULU
        foreach ($this->request->getPost('tanggal_cerita') as $value) {
            if($value == "")
                continue;
            $this->session->set('tanggal_cerita'.$noTanggal++, $value); 
            
        }

        foreach ($this->request->getPost('judul_cerita') as $value) {
            if($value == "")
            continue;
            $this->session->set('judul_cerita'.$noJudul++, $value); 
        }

        foreach ($this->request->getPost('isi_cerita') as $value) {
            if($value == "")
            continue;
            $this->session->set('isi_cerita'.$noIsi++, $value); 
        }
        
        //KEMUDIAN HAPUS SEMUA DATA CERITA SEBULUMNYA
        $hpscerita = $this->AdminModel->hapus_cerita();

        //SETELAH ITU KITA SIMPAN KE DB
        for($i=0;$i<$noTanggal;$i++){
            $tanggal_cerita = $this->session->get('tanggal_cerita'.$i);
            $judul_cerita = $this->session->get('judul_cerita'.$i);
            $isi_cerita = $this->session->get('isi_cerita'.$i);

            $dataCerita = [
                'id_user' => $_SESSION['id_usernya'],
                'tanggal_cerita' => $tanggal_cerita,
                'judul_cerita' => $judul_cerita,
                'isi_cerita' => $isi_cerita
            ];

            $saveCerita = $this->AdminModel->save_cerita($dataCerita);
        }

        return redirect()->to(base_url('admin/edit_pengguna'));

    }

    public function do_update_video(){
         
        $data['video'] = $this->request->getPost('video');

        $update = $this->AdminModel->update_video($data);
        if($update){
            echo 'sukses';
            session()->setFlashdata("success", "Data telah dirubah");
        }else{
            echo 'gagal';
        }
    }

    // upload foto gallery
	public function do_update_gallery(){

        $avatar = $this->request->getFile('file');
        $kunci = $this->request->getPost('kunci');
        $path = 'assets/users/'.$kunci;
        
        //folder e
        if(!file_exists($path)){
        	$create = mkdir('assets/users/'.$kunci, 0777,true);
        }

        //nama file e
        for($i=1;$i<=10;$i++){
        	$pathName = 'assets/users/'.$kunci.'/album'.$i.'.png';
        	if(!file_exists($pathName)){
        		$ok = array("no"=>$i,"kunci"=>$kunci);
        		$avatar->move('assets/users/'.$kunci, 'album'.$i.'.png');
                echo json_encode($ok);
                
                //save to db
                $dataAlbum = [
                    'id_user' => $_SESSION['id_usernya'],
                    'album' => 'album'.$i
  
                ];
                $saveAlbum = $this->AdminModel->save_album($dataAlbum);
        		break;
        	} 
        }

    }

    public function do_del_gallery(){

       $id = $this->request->getPost('id');
       $kunci = $this->request->getPost('kunci');
       $file = 'assets/users/'.$kunci.'/album'.$id.'.png';
       $data['album'] = 'album'.$id;
       $data['id_user'] = $_SESSION['id_usernya'];
       $delete = $this->AdminModel->delete_album($data);
       unlink($file);
       echo json_encode("sukses");
    }


    public function do_update_acara(){
         
        $datanyaSiapa = $this->request->getPost('datanyaSiapa'); //cara cepat pake variabel :)
        $data["tanggal_".$datanyaSiapa] = $this->request->getPost('tanggal');
        $data['jam_'.$datanyaSiapa] = $this->request->getPost('waktu');
        $data['tempat_'.$datanyaSiapa] = $this->request->getPost('lokasi');
        $data['alamat_'.$datanyaSiapa] = $this->request->getPost('alamat');

        $update = $this->AdminModel->update_acara($data);
        if($update){
            echo 'sukses';
            session()->setFlashdata("success", "Data telah dirubah");
        }else{
            echo 'gagal';
        }
    }

    public function do_update_maps(){
         
        $data['maps'] = $this->request->getPost('maps');

        $update = $this->AdminModel->update_maps($data);
        if($update){
            echo 'sukses';
            session()->setFlashdata("success", "Data telah dirubah");
        }else{
            echo 'gagal';
        }
    }

    //upload foto mempelai
	public function do_update_foto_mempelai(){

        $groom = $this->request->getFile('foto_groom');
        $bride = $this->request->getFile('foto_bride');
        $sampul = $this->request->getFile('foto_sampul');
        $kunci = $this->request->getPost('kunci');
        $path = 'assets/users/'.$kunci;
        
        //cek folder e
        if(!file_exists($path)){
        	$create = mkdir('assets/users/'.$kunci, 0777,true);
        }
         
        if($groom != ''){ //cek dulu ini fotonya siapa
        	$avatar = $groom;
        	$pathName = 'assets/users/'.$kunci.'/groom.png';
        	if(file_exists($pathName)){
        		unlink($pathName); //hapus dulu foto yg lama
	    	} 
				$avatar->move('assets/users/'.$kunci, 'groom.png'); //upload yg baru
				echo 'uploadedgroom'; //give feedback ke jquery.. agar tampilan fotonya di ubah dgn yg baru
        }else if($bride != ''){
            $avatar = $bride;
            $pathName = 'assets/users/'.$kunci.'/bride.png';
            if(file_exists($pathName)){
                unlink($pathName);
            } 
            $avatar->move('assets/users/'.$kunci, 'bride.png');
            $this->session->set('foto_bride', 1);
            echo 'uploadedbride';
            
        }else{
            $avatar = $sampul;
            $pathName = 'assets/users/'.$kunci.'/kita.png';
            if(file_exists($pathName)){
                unlink($pathName);
            } 
            $avatar->move('assets/users/'.$kunci, 'kita.png');
            $this->session->set('foto_sampul', 1);
            echo 'uploadedsampul';
        } 	


    }
     
    public function do_update_mempelai(){
         
        $datanyaSiapa = $this->request->getPost('datanyaSiapa'); //cara cepat pake variabel :)
        $data["nama_".$datanyaSiapa] = $this->request->getPost('nama');
        $data['nama_panggilan_'.$datanyaSiapa] = $this->request->getPost('nama_panggilan');
        $data['nama_ayah_'.$datanyaSiapa] = $this->request->getPost('nama_ayah');
        $data['nama_ibu_'.$datanyaSiapa] = $this->request->getPost('nama_ibu');

        $update = $this->AdminModel->update_mempelai($data);
        if($update){
            echo 'sukses';
            session()->setFlashdata("success", "Data telah dirubah");
        }else{
            echo 'gagal';
        }
    }

    public function do_update_musik(){
        $musik = $this->request->getFile('musik');
        $data = $this->AdminModel->get_data_by_id_user();
        $kunci = $data[0]->kunci;
        $path = 'assets/users/'.$kunci;
        echo $musik->getName();;
        if (! $musik->isValid())
        {
            //jika file lebih dari 2mb
            //jika ingin lebih dari 2mb silahkan edit file php.ini (googling ya :) )
            session()->setFlashdata("success", "Data telah dirubah");
            return redirect()->to(base_url('user/pengaturan'));
        }
        //cek folder e
        if(!file_exists($path)){
            $create = mkdir('assets/users/'.$kunci, 0777,true);
        }

        $pathName = 'assets/users/'.$kunci.'/musik.mp3';
        if(file_exists($pathName)){
            unlink($pathName);
        } 

        $musik->move('assets/users/'.$kunci,'musik.mp3');
        return redirect()->to(base_url('admin/edit_pengguna'));

    }

    public function do_update_fitur(){
        $data['cerita'] = $this->request->getPost('cerita');
        $data['gallery'] = $this->request->getPost('album');
        $data['komen'] = $this->request->getPost('ucapan');
        $data['lokasi'] = $this->request->getPost('lokasi');
        $update = $this->AdminModel->update_fitur($data);
        if($update){
            echo 'sukses';
            session()->setFlashdata("success", "Data telah dirubah");
        }else{
            echo 'gagal';
        }
    }

    public function do_update_domain(){
        $domain = $this->request->getPost('domain');

        if($domain != ''){
            $cek = $this->AdminModel->cek_domain($domain); //cek dulu domain yg direkuest jika sdh ada maka feedback error
            if(count($cek) > 0){
                echo 'gagal';
                exit;
            }else{
                $update = $this->AdminModel->update_domain($domain);
                if($update){
                    echo 'sukses';
                    session()->setFlashdata("success", "Data telah dirubah");
                }else{
                    echo 'gagal';
                }
            }   
        }
    }

    public function add_pengguna(){

        if($this->request->getMethod() == 'post'){
            $id = $this->request->getPost('id');
            $this->session->set('id_usernya', $id);
        }
        $data['title'] = 'Add Pengguna';
        $data['view'] = 'admin/add_pengguna';

        $data['tema'] = $this->AdminModel->get_all_themes()->getResult();
        $data['user'] = $this->AdminModel->get_user_by_id_user();
        $data['fitur'] = $this->AdminModel->get_fitur_by_id_user();
        $data['acara'] = $this->AdminModel->get_acara_by_id_user();
        $data['mempelai'] = $this->AdminModel->get_mempelai_by_id_user();
        $data['cerita'] = $this->AdminModel->get_cerita_by_id_user(); 
        // $data['album'] = $this->AdminModel->get_album_by_id_user();
        $data['data'] = $this->AdminModel->get_data_by_id_user();
        $data['order'] = $this->AdminModel->get_order_by_id_user();
        return view('admin/layout', $data);

    }

    public function save_pengguna(){
        $email = $this->request->getPost('email');
		$domain = $this->request->getPost('domain');
        $password = $this->request->getPost('password');
		//users

	 	$hp = $this->request->getPost('hp');
	 	$username = $email;
	 	$password = $password;
	 	$dataUser = [
	 		'email' => $email,
	 		'hp' => $hp,
	 		'username' => $username,
	 		'password' => md5($password),
	 		'id_unik' => '',
	 	];
		
		//insert dulu data user nya nanti diambil idnya 
	 	$saveUser = $this->AdminModel->save_user($dataUser);
        $id_user = $this->db->insertID(); //ambil id 
        
        $today = date('ym');
        $kode = $today.$id_user.rand(10,99); //dijadikan invoice sekaligus kode unik user. Formatnya ( 2 digit tahun, 2 digit bulan, id user, random 2 angka)
        $this->AdminModel->update_kode($kode,$id_user);
        	//mempelai
	 	$nama_lengkap_pria = $this->request->getPost('nama_lengkap_pria');
	 	$nama_panggilan_pria = $this->request->getPost('nama_panggilan_pria');
	 	$nama_ibu_pria = $this->request->getPost('nama_ibu_pria');
	 	$nama_ayah_pria = $this->request->getPost('nama_ayah_pria');

	 	$nama_lengkap_wanita = $this->request->getPost('nama_lengkap_wanita');
	 	$nama_panggilan_wanita = $this->request->getPost('nama_panggilan_wanita');
	 	$nama_ibu_wanita = $this->request->getPost('nama_ibu_wanita');
	 	$nama_ayah_wanita = $this->request->getPost('nama_ayah_wanita');
         
	 	$dataMempelai = [
	 		'id_user' => $id_user,
	 		'nama_pria' => $nama_lengkap_pria,
	 		'nama_panggilan_pria' => $nama_panggilan_pria,
	 		'nama_ibu_pria' => $nama_ibu_pria,
	 		'nama_ayah_pria' => $nama_ayah_pria,
	 		'nama_wanita' => $nama_lengkap_wanita,
	 		'nama_panggilan_wanita' => $nama_panggilan_wanita,
	 		'nama_ibu_wanita' => $nama_ibu_wanita,
	 		'nama_ayah_wanita' => $nama_ayah_wanita,
	 	];
         
        $this->AdminModel->save_mempelai($dataMempelai);
        //order
	 	$theme = $this->request->getPost('theme');

	 	$dataOrder = [
	 		'id_user' => $id_user,
	 		'domain' => $domain,
	 		'theme' => $theme,
	 		'status' => '1'

	 	];

	 	$this->AdminModel->save_order($dataOrder);
        
         //acara

	 	$tanggal_akad = $this->request->getPost('tanggal_akad');
	 	$waktu_akad = $this->request->getPost('waktu_akad');
	 	$lokasi_akad = $this->request->getPost('lokasi_akad');
	 	$alamat_akad = $this->request->getPost('alamat_akad');

	 	$tanggal_resepsi = $this->request->getPost('tanggal_resepsi');
	 	$waktu_resepsi = $this->request->getPost('waktu_resepsi');
	 	$lokasi_resepsi = $this->request->getPost('lokasi_resepsi');
		$alamat_resepsi = $this->request->getPost('alamat_resepsi');
		 
		$maps =  $this->session->get('maps_resepsi');

	 	$dataAcara = [
	 		'id_user' => $id_user,
	 		'tanggal_akad' => $tanggal_akad,
	 		'jam_akad' => $waktu_akad,
	 		'tempat_akad' => $lokasi_akad,
	 		'alamat_akad' => $alamat_akad,
	 		'tanggal_resepsi' => $tanggal_resepsi,
	 		'jam_resepsi' => $waktu_resepsi,
	 		'tempat_resepsi' => $lokasi_resepsi,
	 		'alamat_resepsi' => $alamat_resepsi
	 	];

        $this->AdminModel->save_acara($dataAcara);
        //cerita
        
	 	$skipCerita = $this->request->getPost('jml_cerita');
	 	$cerita = 0;
         
        //  return $skipCerita;
		if($skipCerita > 0){
            
			$jml_cerita = $this->request->getPost('jml_cerita'); 
            $tgl_cerita = $this->request->getPost('tanggal_cerita');
            $judul_cerita = $this->request->getPost('judul_cerita');
            foreach ($tgl_cerita as $key => $val) {
                $dataCerita = array(             
                   'tanggal_cerita' => $tgl_cerita[$key],
                   'judul_cerita' => $judul_cerita[$key]       
                );      
             }      
           
			$saveCerita = $this->AdminModel->save_cerita($dataCerita);
			// }
			$cerita = 1;
		}

        //gallery
		$skipGallery = $this->request->getPost('jml_cerita');
		$video = '';
		$gallery = 0;
		$generate = $this->session->get('dummy');
		if($skipGallery == ''){
			for($a=1;$a<=10;$a++){
		      $pathName = 'assets/users/'.$generate.'/album'.$a.'.png';
		      if(!file_exists($pathName))continue;
		      $dataAlbum = [
		      	'id_user' => $id_user,
		      	'album' => 'album'.$a

		      ];
		      $saveAlbum = $this->AdminModel->save_album($dataAlbum);
			}
			$video = '';
			$gallery = 1;
		}
        $kunci = md5($id_user.$domain);
        $groom = $this->request->getFile('foto_pria');
        $bride = $this->request->getFile('foto_bride');
        // $sampul = $this->request->getFile('foto_sampul');
        $path = 'assets/users/'.$kunci;
        //cek folder e
        
        if(!file_exists($path)){
        	$create = mkdir('assets/users/'.$kunci, 0777,true);
        }
         
        $status_pria = 0;
        $status_wanita = 0;
        if($groom != ''){ //cek dulu ini fotonya siapa
        	$avatar = $groom;
            $status_pria = 1;
        	$pathName = 'assets/users/'.$kunci.'/groom.png';
        	if(file_exists($pathName)){
        		unlink($pathName); //hapus dulu foto yg lama
	    	} 
				$avatar->move('assets/users/'.$kunci, 'groom.png'); //upload yg baru
			
        }else if($bride != ''){
            
            $avatar = $bride;
            $status_wanita = 1;
            $pathName = 'assets/users/'.$kunci.'/bride.png';
            if(file_exists($pathName)){
                unlink($pathName);
            } 
            $avatar->move('assets/users/'.$kunci, 'bride.png');
            $this->session->set('foto_bride', 1);
            
        }
        
		$dataData = [
			'id_user' => $id_user,
			'foto_pria' => $status_pria,
			'foto_wanita' => $status_wanita,
			'video' => $video,
			'kunci' => $kunci,
			'maps' => $maps,
			'salam_pembuka' => "Assalamu'alaikum warahmatullahi wabarakatuh\nDengan memohon rahmat dan ridho Allah SWT, Kami akan menyelenggarakan resepsi pernikahan Putra-Putri kami :
			",
		];

        // return json_encode($dataData);
        $saveData = $this->AdminModel->save_data($dataData);

        $cerita = $this->request->getPost('cerita');
        $album = $this->request->getPost('gallery');
        $ucapan = $this->request->getPost('komen');
        $lokasi = $this->request->getPost('lokasi');

        if($cerita == "on"){
            $cerita = '1';
        }else{
            $cerita = '0';
        }

        if($album == "on"){
            $album = '1';
        }else{
            $album = '0';
        }

        if($ucapan == "on"){
            $ucapan = '1';
        }else{
            $ucapan = '0';
        }
        
        if($lokasi == "on"){
            $lokasi = '1';
        }else{
            $lokasi = '0';
        }

        $data['id_user'] = $id_user;
        $data['sampul'] = 1;
        $data['mempelai'] = 1;
        $data['acara'] = 1;
        $data['cerita'] = $cerita;
        $data['gallery'] = $album;
        $data['komen'] = $ucapan;
        $data['lokasi'] = $lokasi;
        $saveFitur = $this->AdminModel->save_fitur($data);

        //pembayaran
		$dataPembayaran = [
			'id_user' => $id_user,
			'invoice' => $kode,
			'status' => '2'
		];
        $saveOrder = $this->AdminModel->save_pembayaran($dataPembayaran);
        session()->setFlashdata("success", "Data telah tersimpan");
        return redirect()->to(base_url('/admin/pengguna'));
    }

    public function notif()
	{
		// Flash messages settings

		session()->setFlashdata("success", "This is success message");

		session()->setFlashdata("warning", "This is warning message");

		session()->setFlashdata("info", "This is information message");

		session()->setFlashdata("error", "This is error message");

        return view('admin/notif');
	}
    
}