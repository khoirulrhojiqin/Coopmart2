<style type="text/css">
    #inlist{overflow:hidden; }
    #inlist:hover {overflow-x: scroll; overflow-y: hidden;}
</style>
<div class="block-header">
            </div>
            <!-- Basic Examples -->

            <div class="row clearfix">
                <form method="POST" action="<?php echo base_url('admin/laporan_barang');?>">
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
                                Laporan barang
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <a type="button" href="<?php echo site_url('laporan/laporan_barang');?>" class="btn bg-teal waves-effect" target='_blank'><i class="material-icons">print</i> Cetak</a>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive" id="inlist">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ID</th>
                                            <th>Nama Barang</th>
                                            <th>Stok</th>
                                            <th>Harga</th>
                                            <th>Kategori</th>
                                        </tr>
                                    </thead>                             
                                    <tbody>
                                        <?php $no=1; foreach($barang as $row): ?>
                                        <tr>   
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->id_barang; ?></td>
                                            <td><?php echo $row->nama_barang; ?></td>
                                            <td><?php echo $row->stok; ?></td>
                                            <td><?php echo 'Rp.'.number_format($row->harga_jual,2,',','.'); ?></td>
                                            <td><?php echo $row->kategori;?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                  

                                    </tbody>
                                </table>
        <!-- MOdal Edit User -->
       
        <!-- End Modal Edit user -->
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