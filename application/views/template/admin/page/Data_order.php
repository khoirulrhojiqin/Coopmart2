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
                                DATA DETAIL ORDER
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <!-- <li class="dropdown">
                                    <div class="button">
                                        <button type="button" class="a btn bg-pink btn-circle-lg waves-effect waves-circle waves-float" data-toggle="modal" data-target="#defaultModal">
                                            <i class="material-icons">add</i>
                                        </button>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive" id="inlist">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>ID Order</th>
                                            <th>Pelanggan</th>
                                            <th>Tanggal</th>
                                            <th>qty</th>
                                            <th>Harga</th>
                                            <th>Total</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>                             
                                    <tbody>
                                        <?php foreach($order as $row): ?>
                                        <tr>   
                                            <td><?php echo $row->id_order; ?></td>
                                            <td><?php echo $row->id_user; ?></td>
                                            <td><?php echo $row->created_at; ?></td>
                                            <td><?php echo $row->qty; ?></td>
                                            <td><?php echo $row->harga; ?></td>
                                            <td><?php echo $row->total; ?></td>

                                            <td>
                                               <div class="">
                                                <a 
                                                href="javascript:;"
                                                data-id_order="<?php echo $row->id_order; ?>"
                                                data-tanggal="<?php echo $row->created_at; ?>"
                                                data-qty="<?php echo $row->qty; ?>"
                                                data-id_user="<?php echo $row->id_user; ?>"
                                                data-harga="<?php echo $row->harga; ?>"
                                                data-total="<?php echo $row->total; ?>"
                                                data-toggle="modal" data-target="#editModal">

                                                <button type="button" class="btn bg-cyan btn-circle waves-effect waves-circle waves-float" data-target="#ubah-data">
                                                     <i class="material-icons">edit</i>
                                                </button>
                                                 </a> 
                                                <!-- Tombol Delete -->
                                                <div class="js-sweetalert iconxx">
                                                <button type="button" class="del btn bg-pink btn-circle waves-effect waves-circle waves-float" data-id='<?=$row->id_order; ?>'>
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
        <!-- MOdal Edit User -->
         <!-- ============ MODAL ADD BARANG ===============-->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title" id="defaultModalLabel">Edit Order</h3>
                </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'Admin/ubah_order'?>">
            <div class="modal-body">
                <div class="row clearfix">                   
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label"">
                        <label>ID</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="id_order" name="id_order" class="form-control" readonly="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                     <div class="row clearfix"> 
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label>ID Pelanggan</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <input type="text" id="id_user" name="id_user" class="form-control">
                                        </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix"> 
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label>Tanggal</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <input type="text" id="tanggal" name="tanggal" class="form-control">
                                        </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix"> 
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label>QTY</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <input type="text" id="qty" name="qty" class="form-control">
                                        </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix"> 
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label>Harga</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <input type="text" id="harga" name="harga" class="form-control">
                                        </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix"> 
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label>Total</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <input type="text" id="total" name="total" class="form-control">
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
                            url : "<?= base_url('Admin/hapus_order/') ?>"+id,
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
                modal.find('#id_order').attr("value",div.data('id_order'));
                modal.find('#tanggal').attr("value",div.data('tanggal'));
                modal.find('#id_user').attr("value",div.data('id_user'));
                modal.find('#qty').attr("value",div.data('qty'));
                modal.find('#harga').attr("value",div.data('harga'));
                modal.find('#total').attr("value",div.data('total'));
            });
        });
    </script>