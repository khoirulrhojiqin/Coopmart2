   <script type="text/javascript">
jQuery(function(){
 new Highcharts.Chart({
  chart: {
   renderTo: 'chart',
   type: 'line',
  },
  title: {
   text: 'Statistik Transaksi',
   x: -20
  },
  subtitle: {
   text: 'Count Statistic',
   x: -20
  },
  xAxis: {
   categories: ['Januari', 'Februari', 'Maret', 'April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember']
  },
  yAxis: {
   title: {
    text: 'Nilai dalam angka'
   }
  },
  credits: {
          enabled: false
        },
  series: [{
   name: 'Transaksi',
   data: <?php echo json_encode($grafik); ?>
  // },{
  //    name: "Penerimaan Bantuan",
  //    data: <?php //echo json_encode($penerima); ?>
  // },{
  //    name: "Pertumbuhan Penduduk",
  //    data: <?php //echo json_encode($pertumbuhan); ?>
  // 
}]
 });
}); 
</script>

            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect" style="background-color: #E82F63;">
                        <div class="icon">
                            <i class="material-icons">group</i>
                        </div>
                        <div class="content">
                            <div class="text">USERS</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $user->num_rows(); ?>" data-speed="1000" data-fresh-interval="20"></div>  
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">label</i>
                        </div>
                        <div class="content">
                            <div class="text">PRODUK</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $barang->num_rows(); ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">label</i>
                        </div>
                        <div class="content">
                            <div class="text">PENJUALAN</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $jual->num_rows(); ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">label</i>
                        </div>
                        <div class="content">
                            <div class="text">TANSAKSI</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $beli->num_rows(); ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->

            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Grafik Transaksi Penjualan</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="chart"></div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
            </div>
