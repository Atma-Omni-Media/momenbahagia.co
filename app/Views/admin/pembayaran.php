<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">

<script>
$(function(){

    <?php if(session()->has("error")) { ?>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '<?= session("error") ?>'
        })
    <?php } ?>

    <?php if(session()->has("success")) { ?>
        Swal.fire({
            icon: 'success',
            title: 'Great!',
            text: '<?= session("success") ?>'
        })
    <?php } ?>
});
</script>


<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

        <!-- Invoice Example -->
        <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-primary">
                  <h6 class="m-0 font-weight-bold text-light">Data Ucapan</h6>
                </div>
                <div class="table-responsive p-3">
                <table class="table align-items-center table-flush" id='dataTable'>
                    <thead class="thead-light">
                      <tr>
                        <th>No Invoice</th>
                        <th>Pengguna</th>
                        <th>Domain</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php 
                    foreach($join as $row){ 
                
                    ?>

                      <tr>
                        <td>#<?= $row->invoice ?></td>
                        <td><?= $row->username ?></td>
                        <td><a href="<?= SITE_UNDANGAN.'/'.$row->domain ?>"><?= $row->domain ?></a></td>

                        <?php if($row->statusPembayaran == '1'){ ?>    
                        <td><span class="badge badge-warning">Menunggu Konfirmasi</span></td>
                        <?php }else if($row->statusPembayaran == '2'){ ?>    
                        <td><span class="badge badge-success">Lunas</span></td>
                        <?php }else{ ?>    
                        <td><span class="badge badge-secondary">Belum Lunas</span></td>
                        <?php } ?>

                        <td><div class="btn-group mb-1">
                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Aksi
                                </button>
                                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                                <a href="#" class="dropdown-item" 
                                data-nama="<?= $row->nama_lengkap ?>"
                                data-bank="<?= $row->nama_bank ?>"
                                data-invoice="<?= $row->invoice ?>"
                                data-toggle="modal" 
                                data-target="#modalData">Lihat</a>
                                <a href="#" class="dropdown-item konfirmasiBtn" 
                                data-id="<?= $row->id_user ?>"
                                data-toggle="modal" 
                                data-target="#modalKonfirmasi">Konfirmasi & Aktifkan</a>
                            </div></td>
                      </tr>
                    <?php } ?>  
                    </tbody>
                  </table>
                </div>
              </div>
        </div>
        <!-- Message From Customer-->
       
    </div>
    <!--Row-->
</div>
<!---Container Fluid-->

<!-- Modal -->
<div class="modal fade" id="modalKonfirmasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah kamu yakin ingin mengkonfirmasi pengguna ?
        <input type="hidden" value="" id="iduser">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-primary" id="konfirmasi">Ya</button>
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col mt-2">
            <label>Nama Lengkap</label>
            <input id="nama_lengkap" type="text" class="form-control" placeholder="Contoh : Dinda Rahma" value="" required>
        </div>
        <div class="col mt-2">
            <label>Nama Bank</label>
            <input id="nama_bank" type="text" class="form-control" placeholder="Contoh : BRI Syariah " value="" required>
        </div>        
        <div class="col mt-2 mb-2">
            <label>Bukti Transfer</label><br>
            <img id="bukti" src="" height="250px">
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<script>

    //triggered when modal is about to be shown
    $('#modalData').on('show.bs.modal', function(e) {
        var nama = $(e.relatedTarget).data('nama');
        var bank = $(e.relatedTarget).data('bank');
        var invoice = $(e.relatedTarget).data('invoice');
        $('#nama_lengkap').val(nama);
        $('#nama_bank').val(bank);
        $('#bukti').attr('src','<?= base_url() ?>/assets/bukti/'+invoice+'.png');
    });

    $('.konfirmasiBtn').on('click', function (event) {
        var id = $(this).data('id');
        $(".modal-body #iduser").val( id );
    });

    $('#konfirmasi').on('click', function(event) {

        var id = $('#iduser').val();

        $.ajax({
            url : "<?= base_url('admin/konfirmasi') ?>",
            method : "POST",
            data : {id: id},
            async : true,
            dataType : 'html',
            success: function($hasil){
               if($hasil == 'sukses'){
                location.reload();
               }
            }
        });
    });

</script>
