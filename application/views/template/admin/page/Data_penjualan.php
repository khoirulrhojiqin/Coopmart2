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
                                DATA PENJUALAN
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <!-- <div class="button">
                                        <button type="button" class="a btn bg-cyan btn-circle-lg waves-effect waves-circle waves-float" data-toggle="modal" data-target="#defaultModal">
                                            <i class="material-icons">add</i>
                                        </button>
                                    </div> -->
                                    <!-- <button type="button" class="btn bg-blue btn-sm waves-effect" data-toggle="modal" data-target="#defaultModal">+ Tambah User</button>  -->
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive" id="inlist">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ID Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Jumlah</th>
                                            <th>Tanggal</th>
                                            <?php if ($this->session->userdata('akses') == 'admin') { ?>
                                            <th>Aksi</th>
                                            <?php }?>
                                        </tr>
                                    </thead>                             
                                    <tbody>
                                        <?php $no=1; foreach($jual as $row): ?>
                                        <tr>   
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->id_barang; ?></td>
                                            <td><?php echo $row->nama_barang; ?></td>
                                            <td><?php echo $row->jumlah; ?></td>
                                            <td><?php echo $row->tanggal; ?></td>
                                            <?php if ($this->session->userdata('akses') == 'admin') { ?>
                                            <td>
                                               <div class="">
                                                <a 
                                                href="javascript:;"
                                                data-id_jual="<?php echo $row->id_jual; ?>"
                                                data-id_barang="<?php echo $row->id_barang; ?>"
                                                data-jumlah="<?php echo $row->jumlah; ?>"
                                                data-tanggal="<?php echo $row->tanggal; ?>"
                                                data-toggle="modal" data-target="#editModal">                                           
                                                <button type="button" class="btn bg-cyan btn-circle waves-effect waves-circle waves-float" data-target="#ubah-data">
                                                     <i class="material-icons">edit</i>
                                                </button>
                                                 </a> 
                                                <!-- Tombol Delete -->
                                                <div class="js-sweetalert iconxx2">
                                                <button type="button" class=" del btn bg-pink btn-circle waves-effect waves-circle waves-float" data-id='<?=$row->id_jual; ?>'>
                                                     <i class="material-icons">delete</i>
                                                </button> 
                                                <!-- </div> -->                                          
                                                </div>
                                            </td>
                                           <?php } ?>
                                        </tr>
                                        <?php endforeach; ?>
                                  

                                    </tbody>
                                </table>
                                 <!-- ============ MODAL ADD BARANG ===============-->
        <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title" id="defaultModalLabel">Tambah Penjualan</h3>
                </div>
            <form id="form_advanced_validation" class="form-horizontal" method="post" action="<?php echo base_url().'Admin/simpan_jual'?>"  enctype="multipart/form-data" role="form">
            <div class="modal-body">  
                    <div class="row clearfix">                   
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>ID Jual</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                             <input type="text" name="id_jual" class="form-control" readonly>
                                             <label class="form-label">ID Jual</label>
                                        </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix">         
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>ID Barang</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                             <input type="text" name="id_barang" class="form-control" required>
                                              <label class="form-label">ID Barang</label>
                                        </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix">         
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>Jumlah</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                             <input type="text" name="jumlah" class="form-control" required>
                                             <label class="form-label">Jumlah</label>
                                        </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix">         
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>Tanggal</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                             <input type="text" name="tanggal" class="form-control" required>
                                             <label class="form-label">Tanggal</label>
                                        </div>
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
        <!--END MODAL ADD BARANG-->

        <!-- MOdal Edit User -->
         <!-- ============ MODAL ADD BARANG ===============-->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title" id="defaultModalLabel">Edit Jual</h3>
                </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'Admin/ubah_jual'?>">
            <div class="modal-body"> 
                    <div class="row clearfix">                    
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>ID Jual</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                             <input type="text" id="id_jual" name="id_jual" class="form-control" readonly>
                                        </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix">         
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>ID Barang</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <input type="text" id="id_barang" name="id_barang" class="form-control" readonly="">
                                        </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix">         
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>Jumlah</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <input type="text" id="jumlah" name="jumlah" class="form-control" placeholder="Jumlah" required>
                                        </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix">         
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>Tanggal</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <input type="text" id="tanggal" name="tanggal" class="form-control" placeholder="Tanggal" required>
                                        </div>
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
        <!--END MODAL ADD BARANG-->
        <!-- End Modal Edit user -->
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
                            url : "<?= base_url('Admin/hapus_jual/') ?>"+id,
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
                modal.find('#id_jual').attr("value",div.data('id_jual'));
                modal.find('#id_barang').attr("value",div.data('id_barang'));
                modal.find('#jumlah').attr("value",div.data('jumlah'));
                modal.find('#harga').attr("value",div.data('harga'));
                modal.find('#total').attr("value",div.data('total'));
                modal.find('#tanggal').attr("value",div.data('tanggal'));
            });
        });
    </script>