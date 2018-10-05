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
                                DATA USER
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <div class="button">
                                        <button type="button" class="a btn bg-cyan btn-circle-lg waves-effect waves-circle waves-float" data-toggle="modal" data-target="#defaultModal">
                                            <i class="material-icons">add</i>
                                        </button>
                                    </div>
                                    <!-- <button type="button" class="btn bg-blue btn-sm waves-effect" data-toggle="modal" data-target="#defaultModal">+ Tambah User</button>  -->
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive" id="inlist">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Telepon</th>
                                            <th>Status</th>
                                            <th>Akses</th>
                                            <th style="width: 12%">Aksi</th>
                                        </tr>
                                    </thead>                             
                                    <tbody>
                                        <?php foreach($user as $row): ?>
                                        <tr>   
                                            <td><?php echo $row->id_user; ?></td>
                                            <td><?php echo $row->nip; ?></td>
                                            <td><?php echo $row->nama; ?></td>
                                            <td><?php echo $row->telepon; ?></td>
                                            <td><?php echo $row->status; ?></td>
                                            <td><?php echo $row->akses; ?></td>
                                            
                                            <td>
                                               <div class="iconx2">
                                                <a 
                                                href="javascript:;"
                                                data-id_user="<?php echo $row->id_user; ?>"
                                                data-nip="<?php echo $row->nip; ?>"
                                                data-nama="<?php echo $row->nama; ?>"
                                                data-telepon="<?php echo $row->telepon; ?>"
                                                data-status="<?php echo $row->status; ?>"
                                                data-akses="<?php echo $row->akses; ?>"
                                                data-toggle="modal" data-target="#editModal">                                           
                                                <button type="button" class="btn bg-cyan btn-circle waves-effect waves-circle waves-float" data-target="#ubah-data">
                                                     <i class="material-icons">edit</i>
                                                </button>
                                                 </a> 
                                                <!-- Tombol Delete -->
                                                <div class="js-sweetalert iconxx2">
                                                <button type="button" class=" del btn bg-pink btn-circle waves-effect waves-circle waves-float" data-id='<?=$row->id_user; ?>'>
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
            
         <!-- ============ Edit User ===============-->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title" id="defaultModalLabel">Edit User</h3>
                </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'Admin/ubah_user'?>">
            <div class="modal-body">                    
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>ID User</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                             <input type="text" id="id_user" name="id_user" class="form-control" readonly>
                                        </div>
                                     </div>
                                </div>

                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>NIP</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <input type="text" id="nip" name="nip" class="form-control" placeholder="Nomor Induk Pegawai" required>
                                        </div>
                                     </div>
                                </div>

                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>Nama</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" required>
                                        </div>
                                     </div>
                                </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>Telepon</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <input type="text" id="telepon" name="telepon" class="form-control" placeholder="Telepon" required>
                                        </div>
                                     </div>
                                </div>

                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>Status</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <input type="text" id="status" name="status" class="form-control" placeholder="Status" required>
                                        </div>
                                     </div>
                                </div>

                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>Akses</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <input type="text" id="akses" name="akses" class="form-control" placeholder="Akses" required>
                                        </div>
                                     </div>
                                </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>Username<b style="color: red;">*</b></label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <input type="text" id="username" name="username" class="form-control" placeholder="Masukan Nama Pengguna Baru" required>
                                        </div>
                                     </div>
                                </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>Password<b style="color: red;">*</b></label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <input type="text" id="password" name="password" class="form-control" placeholder="Masukan Password Baru" required>
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
        <!--END MODAL Edit User-->
     <!-- ============ MODAL ADD USER ===============-->
        <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title" id="defaultModalLabel">Tambah User</h3>
                </div>
            <form id="form_advanced_validation" class="form-horizontal" method="post" action="<?php echo base_url().'Admin/simpan_user'?>"  enctype="multipart/form-data" role="form">
            <div class="modal-body"> 
                    <div class="row clearfix">         
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>NIP</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                             <input type="text" name="nip" class="form-control" required>
                                              <label class="form-label">Nomor Induk Pegawai</label>
                                        </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix">         
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>Nama</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                             <input type="text" name="nama" class="form-control" required>
                                             <label class="form-label">Nama Lengkap</label>
                                        </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix"> 
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>Telepon</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                             <input type="text" name="telepon" class="form-control" required>
                                             <label class="form-label">Nomor Telepon</label>
                                        </div>
                                     </div>
                                </div>
                
                    <div class="row clearfix">         
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>Akses</label>
                    </div>
                                                                               
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                        <div class="form-group">
                                        <div class="form-line">
                                             <select name="akses" class="form-control" required>
                                                <option value="">-Pilih-</option>
                                                <option value="admin">Admin</option>
                                                <option value="Kasir">Kasir</option>
                                                <option value="user">User</option>
                                             </select>
                                         </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix"> 
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>Username</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                             <input type="text" name="username" class="form-control" required>
                                             <label class="form-label">Username</label>
                                        </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix"> 
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>Password</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                             <input type="text" name="password" class="form-control" required>
                                             <label class="form-label">password</label>
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
                            url : "<?= base_url('Admin/hapus_user/') ?>"+id,
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
                modal.find('#id_user').attr("value",div.data('id_user'));
                modal.find('#nip').attr("value",div.data('nip'));
                modal.find('#nama').attr("value",div.data('nama'));
                modal.find('#telepon').attr("value",div.data('telepon'));
                modal.find('#status').attr("value",div.data('status'));
                modal.find('#akses').attr("value",div.data('akses'));
            });
        });
    </script>