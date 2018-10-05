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
                                DATA ORDER
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
                                            <th>#</th>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Status</th>
                                            <th>Alamat Pengiriman</th>
                                            <th>Telp.</th>
                                            <th>Jenis Pembayaran</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>                             
                                    <tbody>
                                        <?php $no=1; foreach($beli as $row): ?>
                                        <tr>   
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $row->nip; ?></td>
                                            <td><?php echo $row->nama; ?></td>
                                            <td>
                                                 <?php if ($row->status=='Menunggu') {
                                                    echo "<form action='terima_beli' method='post'>
                                                          <input type='hidden' name='id_status' value='$row->id_status'>
                                                          <input type='hidden' name='status' value='Selesai'>
                                                          <button type='submit' class='btn-link' data-toggle='tooltip' data-placement='right' title='Klik untuk menerima'><span class='label label-warning'>$row->status</span></button>
                                                          </form>
                                                         ";
                                                    }else{
                                                    
                                                    echo "<span class='label label-success'>$row->status</span>";
                                                    }
                                                    ?> 
                                            </td>
                                            <td><?php echo $row->alamat; ?></td>
                                            <td><?php echo $row->telp; ?></td>
                                            <td><?php echo $row->jns_transaksi; ?></td>
                                            
                                            <td width="120%">
                                                <div style="padding-right: 00px"> 
                                                <a 
                                                href="javascript:;"
                                                data-id_beli="<?php echo $row->id_beli; ?>"
                                                data-nip="<?php echo $row->nip; ?>"
                                                data-nama="<?php echo $row->nama; ?>"
                                                data-alamat="<?php echo $row->alamat; ?>"
                                                data-telp="<?php echo $row->telp; ?>"
                                                data-jns_transaksi="<?php echo $row->jns_transaksi; ?>"
                                                data-nama_barang="<?php echo $row->nama_barang2; ?>"
                                                data-qty="<?php echo $row->qty2; ?>"
                                                data-harga="<?php echo 'Rp.'.$row->harga2; ?>"
                                                data-total="<?php echo 'Rp.'.$row->total2; ?>"
                                                data-total_bayar="<?php echo 'Rp.'.number_format($row->total_sum,2,',','.'); ?> "
                                                data-total_belanja="<?php echo $row->total_belanja; ?>"
                                                data-toggle="modal" data-target="#editModal">                                           
                                                <button type="button" class="btn bg-cyan btn-circle waves-effect waves-circle waves-float" data-target="#ubah-data">
                                                     <i class="material-icons">zoom_in</i>
                                                </button>
                                                </a> 
                                                <!-- print -->
                                                <a type="button" data-id_beli_print="<?php echo $row->id_beli; ?>" class="btn bg-green btn-circle waves-effect waves-circle waves-float print" target="_blank">
                                                <input type="hidden" <?php $this->session->set_userdata('pr',$row->id_beli) ?>>
                                                     <i class="material-icons">print</i>
                                                </a>
                                                <!-- end print -->
                                                <?php if ($this->session->userdata('akses') == 'admin') { ?>
                                                <!-- Tombol Delete -->
                                                <button type="button" class=" del btn bg-pink btn-circle waves-effect waves-circle waves-float" data-id='<?=$row->id; ?>'>
                                                <div class="js-sweetalert"> <i class="material-icons">delete</i></div>
                                                </button> 
                                                <!-- </div> -->                                                
                                                <?php }?>
                                                </div>    
                                            </td>
                                        </tr>
               <script type="text/javascript">
                function printContent(){
                  $('<iframe>', {
                    name: 'myiframe',
                    class: 'printFrame'
                  })
                  .appendTo('body')
                  .contents().find('body')
                  .append(`
                    <div id="printArea"><br>
                        <hr style="margin-top: 0; margin-bottom: 0; border: 1px solid #969494;">
                        <b>STRUK PENJUALAN</b><br>
                        <b>TOKO OMI COOP MART</b><br>
                        <table width='100%;'>
                            <tr>
                            <td>No. <?=$row->id_beli?></td>   
                            <td align='right' style='font-size:12px'><?php echo date('d F Y'); ?></td>
                            </tr>
                            <tr>
                            <td>Pel. <?=$row->id_user?></td>  
                            <td align='right' style='font-size:12px'><?php echo date('H:m:s A'); ?><br></td>
                            <tr> 
                        <table>
                        <hr style="margin-top: 0; margin-bottom: 5; border: 1px solid #969494;">
                        <?php 
                        $total=0; 
                        foreach ($print as $key):?>
                            <?php if ($key->idbel == $this->session->userdata('pr')) {$total +=$key->total;?>
                            
                                Produk : <?=$key->nama_barang; ?><br>
                                Qty : <?=$key->qty; ?>&nbsp;|&nbsp;
                                Harga : <?=number_format($key->harga,2,',','.'); ?>&nbsp;|&nbsp;
                                Total : <?=number_format($key->total,2,',','.'); ?>&nbsp;
                                <hr style="margin-top: 0; margin-bottom: 10">
                          
                            <?php }?>
                        <?php endforeach;?>
                        Sub Total : <?=number_format($total,2,',','.');?>
                    </div>
                  `);
                  
                      window.frames['myiframe'].focus();
                      window.frames['myiframe'].print();
                      
                      location.reload(true);
                      window.frames['myiframe'].remove();
                      // break
                      setTimeout(() => { $(".printFrame").remove(); }, 0); 
                      // break class;
                };
                  $('.print').on('click', printContent);
            </script>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
               
                 
         <!-- ============ MODAL ADD BARANG ===============-->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title" id="defaultModalLabel">Detail Order</h3>
                    <h3>
                     #Total Belanja <input type="text" id="total_belanja" style="border: none;" readonly>   
                    </h3>
                </div>
            <div class="modal-body">
                <form>                
                <div class="col-md-6"> 
                <div class="row clearfix">                    
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label"">
                        <label>ID</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group" style="margin-bottom: -25px;">
                                            <div class="form-line">
                                                <input type="text" id="id_beli" name="id_beli" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    <div class="row clearfix"> 
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label>NIP</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group" style="margin-bottom: -25px;">
                                        <div class="form-line">
                                             <input type="text" id="nip" name="nip" class="form-control" readonly>
                                        </div>
                                     </div>
                                </div>
                            </div>

                    <div class="row clearfix"> 
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label>Nama</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group" style="margin-bottom: -25px;">
                                        <div class="form-line">
                                             <input type="text" id="nama" name="nama" class="form-control" readonly>
                                        </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix"> 
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label>Tujuan</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group" style="margin-bottom: -25px;">
                                        <div class="form-line">
                                             <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat" readonly>
                                        </div>
                                     </div>
                                </div>
                            </div>
                    
                    <div class="row clearfix"> 
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label>Telp</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group" style="margin-bottom: -25px;">
                                        <div class="form-line">
                                             <input type="text" id="telp" name="telp" class="form-control" readonly>
                                        </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix"> 
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label>Bayar</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group" style="margin-bottom: -25px;">
                                        <div class="form-line">
                                             <input type="text" id="jns_transaksi" name="jns_transaksi" class="form-control" placeholder="Jenis Transaksi" readonly>
                                        </div>
                                     </div>
                                </div>
                            </div>
                </div>
                <div class="col-md-6"> 
                    <div class="row clearfix"> 
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label>Produk</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group" style="margin-bottom: -25px;">
                                        <div class="form-line">
                                             <textarea id="nama_barang" name="nama_barang" class="form-control"readonly rows="8px"></textarea>
                                        </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix"> 
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label>QTY</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group" style="margin-bottom: -25px;">
                                        <div class="form-line">
                                             <input type="text" id="qty" name="qty" class="form-control" readonly>
                                        </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix"> 
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label>Harga</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group" style="margin-bottom: -25px;">
                                        <div class="form-line">
                                             <input type="text" id="harga" name="harga" class="form-control" readonly>
                                        </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix"> 
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label>Total</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group" style="margin-bottom: -25px;">
                                        <div class="form-line">
                                             <input type="text" id="total" name="total" class="form-control" readonly>
                                        </div>
                                     </div>
                                </div>
                            </div>
                    <div class="row clearfix"> 
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label>Total Bayar</label>
                    </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group" style="margin-bottom: -25px;">
                                        <div class="form-line">
                                             <input type="text" id="total_bayar" name="total_bayar" class="form-control" readonly>
                                        </div>
                                     </div>
                                </div>
                            </div>
                </div>
                </div>
                <div class="modal-footer">
                     <button type="button" class="btn bg-grey btn-link waves-effect" data-dismiss="modal">Keluar</button>
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
                modal.find('#nip').attr("value",div.data('nip'));
                modal.find('#nama').attr("value",div.data('nama'));
                modal.find('#alamat').attr("value",div.data('alamat'));
                modal.find('#telp').attr("value",div.data('telp'));
                modal.find('#jns_transaksi').attr("value",div.data('jns_transaksi'));
                modal.find('#nama_barang').val(div.data('nama_barang'));
                modal.find('#qty').attr("value",div.data('qty'));
                modal.find('#harga').attr("value",div.data('harga'));
                modal.find('#total').attr("value",div.data('total'));
                modal.find('#total_bayar').attr("value",div.data('total_bayar'));
                modal.find('#total_belanja').attr("value",div.data('total_belanja'));
            });
        });
    </script>
    
            
   <script>
    // function printContent(data){
    //                $('<iframe>', {
    //                 name: 'myiframe',
    //                 class: 'printFrame'
    //               })
    //               .appendTo('body')
    //               .contents().find('body')
    //               .append(`
    //                 <div id="printArea"><br>
    //                     <hr style="margin-top: 0; margin-bottom: 0; border: 1px solid #969494;">
    //                     <b>STRUK PENJUALAN</b><br>
    //                     <b>TOKO OMI COOP MART</b><br>
    //                     <table width='100%;'>
    //                         <tr>
    //                         <td>No. `+data.print2.id_beli+`</td>   
    //                         <td align='right' style='font-size:12px'>`+data.print2.tgl+`</td>
    //                         </tr>
    //                         <tr>
    //                         <td>Pel. `+data.print2.id_user+`</td>  
    //                         <td align='right' style='font-size:12px'>`+data.print2.jam+`<br></td>
    //                         <tr>
    //                     <table>
    //                     <hr style="margin-top: 0; margin-bottom: 5; border: 1px solid #969494;">
                            
    //                             Produk : `+data.print2.nama_barang+`<br>
    //                             Qty : `+data.print2.qty+`&nbsp;|&nbsp;
    //                             Harga : `+data.print2.harga+`&nbsp;|&nbsp;
    //                             Total : `+data.print2.total+`&nbsp;
    //                             <hr style="margin-top: 0; margin-bottom: 10">
    //                     Sub Total : 
    //                 </div>
    //               `);
                  
    //                   window.frames['myiframe'].focus();
    //                   window.frames['myiframe'].print();

    //                   // location.reload(true);
                      
    //                   // window.frames['myiframe'].remove();

    //                   // setTimeout(() => { $(".printFrame").remove(); }, 0);
    //                 // $('#print').on('click', printContent);                  
    //             }
            // $('.print').click(function() {
            //     var id = $(this).data('id_beli_print');
            //     // Isi nilai pada field
            //      $.ajax({
            //         url: "<?php echo base_url('Admin/data_belis/') ?>"+id,
            //         type : 'POST',
            //         datatype : 'JSON',
            //         success: function(data) {
            //             var a = JSON.parse(data);
            //             if (a.respon.execute) {
            //                 printContent(a.respon);
            //                 // alert(a.respon.print2.id_beli);
            //             }
            //             else{
            //                 alert('not yet');
            //             }
            //             // $('#result').html(response);
            //            //$('#print').on('click', printContent);
            //         }
            //     });
            // });
    
    </script>
    <!-- Script Print order -->
      