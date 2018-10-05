<?php echo $this->session->flashdata('notifsimpan');?>
<?php echo $this->session->flashdata('notifubah');?>
<?php echo $this->session->flashdata('notifhapus');?>
<style type="text/css">
    #inlist{overflow:hidden; }
    #inlist:hover {overflow-x: scroll; overflow-y: hidden;}
    .del{
    background-color: #EF3535;
     }
</style>
<div class="block-header">
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA Kategori
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <div class="button">
                                        <button type="button" class="a btn bg-cyan btn-circle-lg waves-effect waves-circle waves-float" data-toggle="modal" data-target="#defaultModal">
                                            <i class="material-icons">add</i>
                                        </button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive" id="inlist">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>                             
                                    <tbody>
                                        <?php foreach($kategori as $row): ?>
                                        <tr>   
                                            <td><?php echo $row->id_kategori; ?></td>
                                            <td><?php echo $row->nama_kategori; ?></td>
                                            <td>
                                               <div class="iconx">
                                                <a 
                                                href="javascript:;"
                                                data-id_kategori="<?php echo $row->id_kategori; ?>"
                                                data-nama_kategori="<?php echo $row->nama_kategori; ?>"
                                                data-toggle="modal" data-target="#editModal">                                           
                                                <button type="button" class="btn bg-cyan btn-circle waves-effect waves-circle waves-float" data-target="#ubah-data">
                                                     <i class="material-icons">edit</i>
                                                </button>
                                                 </a> 
                                                <!-- Tombol Delete -->
                                                <div class="js-sweetalert iconxx">
                                                <button type="button" class=" del btn bg-pink btn-circle waves-effect waves-circle waves-float" data-id='<?=$row->id_kategori; ?>'>
                                                     <i class="material-icons">delete</i>
                                                </button> 
                                                <!-- </div> -->
                                                </a>                                               
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                  

                                    </tbody>
                                </table>
                                 <!-- ============ MODAL ADD Kategori ===============-->
        <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title" id="defaultModalLabel">Tambah Kategori</h3>
                </div>
            <form id="form_advanced_validation" class="form-horizontal" method="post" action="<?php echo base_url().'Admin/simpan_kategori'?>"  enctype="multipart/form-data" role="form">
            <div class="modal-body">                    
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>ID Jual</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                             <input type="text" name="id_kategori" class="form-control" placeholder="Id Otomatis" readonly>
                                        </div>
                                     </div>
                                </div>

                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>Nama Kategori</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                             <input type="text" name="nama_kategori" class="form-control" required>
                                              <label class="form-label">Nama Kategori</label>
                                        </div>
                                     </div>
                                </div>
                    
                </div>
                <div class="modal-footer">
                     <button type="button" class="btn bg-grey btn-link waves-effect" data-dismiss="modal">Keluar</button>
                     <button type="submit" class="btn bg-blue btn-link waves-effect">Simpan</button>
                </div>
            </form>
            </div> 
            </div> 
            </div>      
        <!--END MODAL ADD KATEGORI-->

         <!-- ============ MODAL EDIT KATEGORI===============-->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title" id="defaultModalLabel">Edit Kategori</h3>
                </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'Admin/ubah_kategori'?>">
            <div class="modal-body">
                <div class="row clearfix">                    
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label"">
                        <label>ID</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="id_kategori" name="id_kategori" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    <div class="row clearfix"> 
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label>Nama Kategori</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <input type="text" id="nama_kategori" name="nama_kategori" class="form-control" placeholder="Nama Kategori">
                                        </div>
                                     </div>
                                </div>
                            </div>\
                    
                </div>
                <div class="modal-footer">
                     <button type="button" class="btn bg-grey btn-link waves-effect" data-dismiss="modal">Keluar</button>
                     <button type="submit" class="btn bg-blue btn-link waves-effect">Simpan</button>
                </div>
            </form>
            </div> 
            </div>
            </div>       
        <!--END MODAL Edit Kategori-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->
            <!-- #END# Exportable Table -->
            <!-- script Hapus barang -->
            <script type="text/javascript">
                $('.del').click(function() {
                    var id = $(this).data('id');
                   swal({
                          title: "Peringatan",
                          text: "Anda yakin ?",
                          type: "warning",
                          showCancelButton: true,
                          closeOnConfirm: false,
                          showLoaderOnConfirm: true
                        }, function () {
                          $.ajax({
                            url : "<?= base_url('Admin/hapus_kategori/') ?>"+id,
                            type : 'GET',
                            datatype : 'JSON',
                            success : function(data){
                                var a = JSON.parse(data);
                                if (a.respon.execute) {
                                    location.reload();
                                }
                            },
                            error : function(data) {
                                // body...
                            }
                          })
                        });
                })
            </script>
<!-- Script Edit user -->
        <script>
        $(document).ready(function() {
            // Untuk sunting
            $('#editModal').on('show.bs.modal', function (event) {
                var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
                var modal          = $(this)
 
                // Isi nilai pada field
                modal.find('#id_kategori').attr("value",div.data('id_kategori'));
                modal.find('#nama_kategori').attr("value",div.data('nama_kategori'));
            });
        });
    </script>