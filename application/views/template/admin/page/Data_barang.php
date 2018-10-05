    <style type="text/css">
    #image-preview{
    display:none;
    width : 210px;
    height : 216px;
}
 #image-previews{
    display:none;
    width : 210px;
    height : 216px;
}
 img {
    max-width: 100%;
    height: auto;
    width: auto\9; /* ie8 */
}
    /* begin relevant CSS */
.blog-insert {
  max-width: 100%;
  text-align: center;
  font-size: 0;
}
.blog-insert > * {
  display: inline-block;
  border: solid 4px #fff;
  box-shadow: 0 0 20px #dad9d9;
}
.blog-insert img {
  max-width: 100%;
  box-sizing: border-box;
}
.blog-insert a img {
  width: 100%;
}
.del{
    background-color: #EF3535;
}
#inlist{overflow:hidden; }
#inlist:hover {overflow-x: scroll; overflow-y: hidden;}
/* end relevant CSS */
</style>
<?php echo $this->session->flashdata('notifsimpan');?>
<?php echo $this->session->flashdata('notifubah');?>
<?php echo $this->session->flashdata('gambarerror');?>
<div class="block-header">
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA BARANG
                            </h2>
                           
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                     <div class="button">
                                        <button type="button" class="a btn bg-cyan btn-circle-lg waves-effect waves-circle waves-float" data-toggle="modal" data-target="#defaultModal">
                                            <i class="material-icons">add</i>
                                        </button>
                                    </div>
                                    <!-- <button type="button" class="btn bg-blue btn-sm waves-effect" data-toggle="modal" data-target="#defaultModal">+ Tambah Data</button>                           -->
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive" id="inlist">
                                <table class="table table-bordered table-striped table-hover dataTable js-basic-example" id="datatables">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Stok</th>
                                            <th>Harga</th>
                                            <th>Deskripsi</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                         $i=1;
                                         foreach($barang as $row):?>
                                        <tr>   
                                            <td><?php echo $i++ ?></td>
                                            <td><?php echo substr($row->nama_barang,0,50); ?>...</td>
                                            <td><?php echo $row->stok; ?></td>
                                            <td>Rp.<?php echo number_format($row->harga_jual,2,',','.'); ?></td>
                                            <td><?php echo substr($row->deskripsi,0,50); ?>...</td>
                                            <td><img src='<?php echo base_url("assets/upload/files/$row->gambar");?>' width='70' height='70'></td>
                                             <td> 
        
                                                <div class="iconx">
                                                <a 
                                                href="javascript:;"
                                                data-id_barang="<?php echo $row->id_barang; ?>"
                                                data-nama_barang="<?php echo $row->nama_barang; ?>"
                                                data-stok="<?php echo $row->stok; ?>"
                                                data-satuan="<?php echo $row->satuan; ?>"
                                                data-harga_jual="<?php echo $row->harga_jual; ?>"
                                                data-gambar="<?php echo base_url('assets/upload/files/'.$row->gambar); ?>"
                                                data-deskripsi="<?php echo $row->deskripsi; ?>"
                                                data-kategori="<?php echo $row->kategori; ?>"
                                                data-toggle="modal" data-target="#editModal">                                           
                                                <button type="button" class="btn bg-cyan btn-circle waves-effect waves-circle waves-float" data-target="#ubah-data">
                                                     <i class="material-icons">edit</i>
                                                </button>
                                                 </a> 
                                                <!-- Tombol Delete -->
                                                <div class="js-sweetalert iconxx">
                                                <button type="button" class="del btn bg-pink btn-circle waves-effect waves-circle waves-float" data-id='<?=$row->id_barang; ?>'>
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
        <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title" id="defaultModalLabel">Tambah Barang Baru</h3>
                </div>
            <!-- <form class="form-horizontal" method="post" action="<?php //echo base_url().'Admin/simpan_barang'?>" enctype="multipart/form-data"> -->
 <!-- <div style="color: red;"><?php //echo (isset($message))? $message : ""; ?></div> -->
        <?php echo form_open_multipart("Admin/simpan_barang", array('enctype'=>'multipart/form-data','class'=>'form-horizontal')); ?>
            <div class="modal-body"> 
                    <div class="row clearfix">         
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>Nama Barang</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <input type="text" maxlength="100" name="nama_barang" class="form-control" placeholder="Nama barang (max 100 karakter)">
                                        </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix">             
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label for="id_barang">Stok</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <input type="number" name="stok" class="form-control" placeholder="Stok">
                                        </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix">         
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>Harga</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <input type="number" name="harga_jual"  class="form-control" placeholder="Harga Jual">
                                        </div>
                                     </div>
                                </div>
                            </div>
                     <div class="row clearfix">        
                     <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>Deskripsi</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea type="text" name="deskripsi" class="form-control" placeholder="Deskripsi" rows="6"></textarea>
                                        </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix">         
                     <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label for="id_barang">Kategori</label>
                    </div>             
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                        <div class="form-group">
                                        <div class="form-line">
                                             <select name="kategori" class="form-control show-tick" required>
                                                <?php foreach($kategori as $kat): ?>
                                                <option value="<?php echo $kat->id_kategori;?>" ><?php echo $kat->nama_kategori;?></option>
                                            <?php endforeach; ?>
                                             </select>
                                         </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix">         
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>Gambar</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <div class="blog-insert">
                                                 <img id="image-preview" alt="image preview"/>
                                             </div>
                                            <br/>
                                            <div class="file-upload">
                                              <div class="file-select">
                                                <div class="file-select-button" id="fileName">Choose File</div>
                                                <div class="file-select-name" id="noFile">No file chosen...</div> 
                                                <input type="file" name="picture" class="form-control file" placeholder="Gambar" id="image-source" onchange="previewImage();" multiple>
                                              </div>
                                            </div>  
                                        </div>
                                     </div>
                                </div>
                            </div>
                            
                </div>
                <div class="modal-footer">
                     <button type="button" class="btn bg-grey btn-link waves-effect" data-dismiss="modal">Keluar</button>
                     <button type="submit" class="btn bg-blue btn-link waves-effect" name="simpan">Simpan</button>
                </div>
            <!-- </form> -->
            <?php echo form_close(); ?>
            </div> 
            </div>
            </div>
       
        <!--END MODAL ADD BARANG-->

         <!-- ============ MODAL EDIT BARANG ===============-->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title" id="defaultModalLabel">Edit Barang</h3>
                </div>
         <?php echo form_open_multipart('Admin/ubah/'.$row->id_barang,array('enctype'=>'multipart/form-data','class'=>'form-horizontal'));?>
            <div class="modal-body">
                    <div class="row clearfix">         
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>Nama Barang</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="hidden" id="id_barang" name="id_barang">
                                             <input type="text" id="nama_barang" name="nama_barang" class="form-control" placeholder="Nama Barang">
                                        </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix">         
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>Stok</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <input type="text" id="stok" name="stok" class="form-control" placeholder="Stok">
                                        </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix">          
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>Harga</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <input type="text" id="harga_jual" name="harga_jual" class="form-control" placeholder="Harga Jual">
                                        </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix">          
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>Deskripsi</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <textarea type="text" id="deskripsi" name="deskripsi" class="form-control" rows="6" cols="">
                                                 
                                             </textarea>
                                                    
                                        </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix">         
                     <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label for="id_barang">Kategori</label>
                    </div>                                           
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group">
                                        <div class="form-line id_s">
                                             <select name="kategori" id="kategori" class="form-control" required>
                                                
                                                <?php foreach($kategori as $kat): ?>
                                                <option value="<?php echo $kat->id_kategori;?>"><?php echo $kat->nama_kategori;?></option>
                                            <?php endforeach; ?>
                                         
                                             </select>
                                         </div>
                                     </div>
                                </div>
                            </div>
                     <div class="row clearfix">        
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label>Ganti Gambar</label>
                    </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-5">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <div class="blog-insert">
                                                <img id="gambar" alt="image preview" style="width:210px; height:216px;" />
                                                 <img id="image-previews" alt="image preview"/>
                                             </div>
                                            <br/>
                                             <div class="file-uploads">
                                              <div class="file-select">
                                                <div class="file-select-button" id="fileName">Choose File</div>
                                                <div class="file-select-name" id="noFiles">No file chosen...</div> 
                                                <input type="file" name="picture" class="form-control" id="picture" onchange="previewImages();" multiple>
                                              </div>
                                            </div>
                                        </div>
                                     </div>
                                </div>
                            </div>
 
                </div>
                <div class="modal-footer">
                     <button type="button" class="btn bg-grey btn-link waves-effect" data-dismiss="modal">Keluar</button>
                     <button type="submit" class="btn bg-blue btn-link waves-effect">Simpan</button>
                </div>
            <!-- </form> -->
             <?php echo form_close(); ?>
            </div> 
            </div>
            </div>
       
        <!--END MODAL EDIT BARANG-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->

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
                            url : "<?= base_url('Admin/hapus/') ?>"+id,
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
<!-- Script Edit Barang -->
        <script>
        $(document).ready(function() {
            // Untuk sunting
            $('#editModal').on('show.bs.modal', function (event) {
                var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
                var modal          = $(this)
                
                $("div.id_s select").val(div.data("kategori"));
                // Isi nilai pada field
                modal.find('#id_barang').attr("value",div.data('id_barang'));
                modal.find('#nama_barang').attr("value",div.data('nama_barang'));
                modal.find('#stok').attr("value",div.data('stok'));
                modal.find('#harga_jual').attr("value",div.data('harga_jual'));
                modal.find('#gambar').attr("src",div.data('gambar'));
                modal.find('#deskripsi').val(div.data('deskripsi'));
                modal.find('#kategori').attr("value",div.data('kategori'));
            });
        });
    </script>
<script type="text/javascript">
    // Chose File
  $('#image-source').bind('change', function () {
  var filename = $("#image-source").val();
  if (/^\s*$/.test(filename)) {
    $(".file-upload").removeClass('active');
    $("#noFile").text("No file chosen..."); 
  }
  else {
    $(".file-upload").addClass('active');
    $("#noFile").text(filename.replace("C:\\fakepath\\", "")); 
  }
});
  // edit
  $('#picture').bind('change', function () {
  var filename = $("#picture").val();
  if (/^\s*$/.test(filename)) {
    $(".file-uploads").removeClass('active');
    $("#noFiles").text("No file chosen..."); 
  }
  else {
    $(".file-uploads").addClass('active');
    $("#noFiles").text(filename.replace("C:\\fakepath\\", "")); 
  }
});
</script>
    <!-- Script Gambar -->
<script type="text/javascript">
    function previewImage() {
    document.getElementById("image-preview").style.display = "block";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("image-source").files[0]);
 
    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview").src = oFREvent.target.result;
    };
  };
</script>
<!-- Script Gambar Edit -->
<script type="text/javascript">
    function previewImages() {
    document.getElementById("image-previews").style.display = "block";
    document.getElementById("gambar").style.display = "none";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("picture").files[0]);
 
    oFReader.onload = function(oFREvent) {
      document.getElementById("image-previews").src = oFREvent.target.result;
    };
  };
</script>
