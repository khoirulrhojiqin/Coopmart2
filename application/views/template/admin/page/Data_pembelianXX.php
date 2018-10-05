<?php echo $this->session->flashdata('notifsimpan');?>
<?php echo $this->session->flashdata('notifubah');?>
<?php echo $this->session->flashdata('notifhapus');?>
<div class="block-header">
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA PEBELIAN
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
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>ID Beli</th>
                                            <th>ID User</th>
                                            <th>ID Barang</th>
                                            <th>Tanggal</th>
                                            <th>Jumlah</th>
                                            <th>Total</th>
                                            <th>Harga</th>
                                            <th>Alamat Pengiriman</th>
                                            <th>Jenis Transaksi</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>                             
                                    <tbody>
                                        <?php foreach($beli as $row): ?>
                                        <tr>   
                                            <td><?php echo $row->id_beli; ?></td>
                                            <td><?php echo $row->id_user; ?></td>
                                            <td><?php echo $row->id_barang; ?></td>
                                            <td><?php echo $row->tanggal; ?></td>
                                            <td><?php echo $row->jumlah; ?></td>
                                            <td><?php echo $row->total; ?></td>
                                            <td><?php echo $row->harga; ?></td>
                                            <td><?php echo $row->alamat_pengiriman; ?></td>
                                            <td><?php echo $row->jenis_transaksi; ?></td>
                                            <td><?php echo $row->keterangan; ?></td>
                                            
                                            <td>
                                               <div class="iconx">
                                                <a 
                                                href="javascript:;"
                                                data-id_beli="<?php echo $row->id_beli; ?>"
                                                data-id_user="<?php echo $row->id_user; ?>"
                                                data-id_barang="<?php echo $row->id_barang; ?>"
                                                data-tanggal="<?php echo $row->tanggal; ?>"
                                                data-jumlah="<?php echo $row->jumlah; ?>"
                                                data-total="<?php echo $row->total; ?>"
                                                data-harga="<?php echo $row->harga; ?>"
                                                data-alamat_pengiriman="<?php echo $row->alamat_pengiriman; ?>"
                                                data-jenis_transaksi="<?php echo $row->jenis_transaksi; ?>"
                                                data-keterangan="<?php echo $row->keterangan; ?>"
                                                data-toggle="modal" data-target="#editModal">                                           
                                                <button type="button" class="btn bg-cyan btn-circle waves-effect waves-circle waves-float" data-target="#ubah-data">
                                                     <i class="material-icons">edit</i>
                                                </button>
                                                 </a> 
                                                <!-- Tombol Delete -->
                                                <div class="js-sweetalert iconxx">
                                                <button type="button" class=" del btn bg-pink btn-circle waves-effect waves-circle waves-float" data-id='<?=$row->id_beli; ?>'>
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
                                 <!-- ============ MODAL ADD BARANG ===============-->
        <!-- <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title" id="defaultModalLabel">Tambah Penjualan</h3>
                </div>
            <form id="form_advanced_validation" class="form-horizontal" method="post" action="<?php echo base_url().'Admin/simpan_jual'?>"  enctype="multipart/form-data" role="form">
            <div class="modal-body">                    
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
                    
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>Harga</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                             <input type="text" name="harga" class="form-control" required>
                                             <label class="form-label">Harga</label>
                                        </div>
                                     </div>
                                </div>

                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>Total</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                             <input type="text" name="total" class="form-control" required>
                                             <label class="form-label">Total</label>
                                        </div>
                                     </div>
                                </div>

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
                <div class="modal-footer">
                     <button type="button" class="btn bg-grey btn-link waves-effect" data-dismiss="modal">Keluar</button>
                     <button type="submit" class="btn bg-blue btn-link waves-effect">Simpan</button>
                </div>
            </form>
            </div> 
            </div> 
            </div> -->      
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
            <form class="form-horizontal" method="post" action="<?php echo base_url().'Admin/ubah_beli'?>">
            <div class="modal-body">
                <div class="row clearfix">                    
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label"">
                        <label>ID Beli</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="id_beli" name="id_beli" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    <div class="row clearfix"> 
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label>ID User</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <input type="text" id="id_user" name="id_user" class="form-control" readonly>
                                        </div>
                                     </div>
                                </div>
                            </div>

                    <div class="row clearfix"> 
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label>ID Barang</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <input type="text" id="id_barang" name="id_barang" class="form-control" readonly>
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
                        <label>Jumlah</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <input type="text" id="jumlah" name="jumlah" class="form-control" placeholder="Jumlah" required>
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
                                             <input type="text" id="total" name="total" class="form-control" placeholder="Total">
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
                                             <input type="text" id="harga" name="harga" class="form-control" placeholder="Harga" required>
                                        </div>
                                     </div>
                                </div>
                            </div>

                    <div class="row clearfix"> 
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label>Alamat Pengiriman</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <input type="text" id="alamat_pengiriman" name="alamat_pengiriman" class="form-control" placeholder="Alamat Pengiriman" required>
                                        </div>
                                     </div>
                                </div>
                            </div>

                    <div class="row clearfix"> 
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label>Jenis Transaksi</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <input type="text" id="jenis_transaksi" name="jenis_transaksi" class="form-control" placeholder="Jenis Transaksi" required>
                                        </div>
                                     </div>
                                </div>
                            </div>
                    
                    <div class="row clearfix"> 
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label>Keterangan</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="Keterangan" required>
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
                            url : "<?= base_url('Admin/hapus_beli/') ?>"+id,
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
                modal.find('#id_beli').attr("value",div.data('id_beli'));
                modal.find('#id_user').attr("value",div.data('id_user'));
                modal.find('#id_barang').attr("value",div.data('id_barang'));
                modal.find('#tanggal').attr("value",div.data('tanggal'));
                modal.find('#jumlah').attr("value",div.data('jumlah'));
                modal.find('#total').attr("value",div.data('total'));
                modal.find('#harga').attr("value",div.data('harga'));
                modal.find('#alamat_pengiriman').attr("value",div.data('alamat_pengiriman'));
                modal.find('#jenis_transaksi').attr("value",div.data('jenis_transaksi'));
                modal.find('#keterangan').attr("value",div.data('keterangan'));
            });
        });
    </script>