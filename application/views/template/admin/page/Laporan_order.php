<style type="text/css">
    .title{
        display: none;
    }
    #inlist{overflow:hidden; }
    #inlist:hover {overflow-x: scroll; overflow-y: hidden;}
</style>
<div class="block-header">
            </div>
            <!-- Basic Examples -->

            <div class="row clearfix">
                <form method="POST" action="<?php echo base_url('admin/laporan_order');?>">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="card">
                            <div class="header">
                                <h2>Tanggal Awal</h2>
                            </div>
                            <div class="body">
                                <input id="myDatePicker" type="text" class="form-control" name="awal" placeholder="dari tanggal ...">
                            </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="card">
                            <div class="header">
                                <h2>Tanggal Akhir</h2>
                            </div>
                            <div class="body">
                                <input id="myDatePicker2" type="text" class="form-control" name="akhir" placeholder="sampai dengan ...">
                            </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="card">
                            <div class="header">
                                <h2>Aksi</h2>
                            </div>
                            <div class="body" style="padding: 18px">
                                <center>
                                <!-- <div class="btn btn-group"> -->
                                    <button class="btn bg-cyan waves-effect" type="submit"><i class="material-icons">youtube_searched_for</i> Cari data</button>
                                    
                                <!-- </div> -->
                                </center>
                            </div>
                    </div>
                </div>
              </form>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Laporan Order
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <!-- <li class="dropdown">
                                    <div class="button">
                                        <button type="button" class="a btn bg-pink btn-circle-lg waves-effect waves-circle waves-float" data-toggle="modal" data-target="#defaultModal">
                                            <i class="material-icons">add</i>
                                        </button>
                                    </div>
                                </li> -->
                                <a type="button" href="<?php echo site_url('laporan/laporan_order');?>" class="btn bg-teal waves-effect" target='_blank'><i class="material-icons">print</i> Cetak</a>
                               <!--  <button id="cetak" class="btn bg-teal waves-effect"><i class="material-icons">print</i> Cetak Area</button> -->
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive" id="inlist">
                                <div class="printArea">
                                <div class="title">
                                        <center style="font-weight: bold;" >
                                                Report Order<br>
                                                Coop Mart Al-Muawanah
                                        </center>
                                        <hr size="3px">
                                </div>
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ID</th>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Pembayaran</th>
                                            <!-- <th>Produk</th> -->
                                            <th>Count</th>
                                            <th>Nilai</th>
                                            <th>Total</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>                             
                                    <tbody>
                                        <?php $no=1;?>
                                        <?php foreach($order as $row):?>
                                        <tr>   
                                            <td><?php echo $no++?></td>
                                            <td><?php echo $row->id_user; ?></td>
                                            <td><?php echo $row->nip; ?></td>
                                            <td><?php echo $row->nama; ?></td>
                                            <td><?php echo $row->jns_transaksi; ?></td>
                                            <!-- <td><?php //echo substr($row->nama_barang,0,20).'...'; ?></td> -->
                                            <td><?php echo $row->total_belanja; ?></td>
                                            <td><?php echo number_format($row->harga,2,',','.'); ?></td>
                                            <td><?php echo number_format($row->total,2,',','.'); ?></td>
                                            <td><?php echo date("Y-m-d H:m:s"); ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                  

                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            <script type="text/javascript">
                $(function() {
                    $(document).ready(function () {
                        $('#myDatePicker').datepicker({
                            format: "yyyy-mm-dd",
                            autoclose:true
                        });
                        $('#myDatePicker2').datepicker({
                            format: "yyyy-mm-dd",
                            autoclose:true
                        });
                    });
                });
            </script>
            <script>
            (function($) {
                $(document).ready(function(e) {
                    $("#cetak").bind("click", function(event){
                        $('div.printArea').printArea();
                    });
                });
            }) (jQuery);
            </script>