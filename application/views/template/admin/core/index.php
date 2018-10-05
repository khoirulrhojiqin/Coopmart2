<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Coopmart Al-Muawanah UIN Alauddin Makassar</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo site_url('assets/images/logo.png')?>" type="image/x-icon">

    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css"> -->
    <link href="<?php echo site_url ('assets/css/material-fonts.css')?>" rel="stylesheet">
    <link href="<?php echo site_url ('assets/css/material-icon.css')?>" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css"> -->

    <!-- Bootstrap Core Css -->
    <link href="<?php echo site_url ('assets/plugins/bootstrap/css/bootstrap.css')?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo site_url ('assets/plugins/node-waves/waves.css')?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo site_url ('assets/plugins/animate-css/animate.css')?>" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?php echo site_url ('assets/plugins/morrisjs/morris.css')?>" rel="stylesheet" />

    <!-- Sweetalert Css -->
    <link href="<?php echo site_url ('assets/plugins/sweetalert/sweetalert.css')?>" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="<?php echo site_url ('assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')?>" rel="stylesheet">

    <!-- Custom Css -->
    <link href="<?php echo site_url ('assets/css/style.css')?>" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo site_url ('assets/css/themes/all-themes.css')?>" rel="stylesheet" />
    <link href="<?php echo site_url ('assets/datetimepicker/datepicker.css')?>" rel="stylesheet" />
</head>

<body class="theme-red">
    <script src="<?php echo site_url ('assets/plugins/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo site_url ('assets/datetimepicker/moment.js')?>"></script>
    <script src="<?php echo site_url ('assets/datetimepicker/datepicker.js')?>"></script>
    <script src="<?php echo site_url ('assets/plugins/sweetalert/sweetalert.min.js')?>"></script>
    <script src="<?php echo site_url ('assets/js/jquery.print.js')?>"></script>
    <script src="<?php echo site_url ('assets/chart/highcharts.js')?>"></script>
    <script src="<?php echo site_url ('assets/chart/exporting.js')?>"></script>
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-pink">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar" style="background-color: #d71149">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <div href="<?php echo base_url('Admin');?>" style="font-family: BrodyD; font-size: 25px;" ><img src="<?php echo base_url('assets/images/header.png')?>" height="40px" width="60px"></div>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <!-- <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li> -->
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">
                                <?php
                              
                                    // $notif2;
                                  echo $notif2;
                                ?> 

                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="<?php echo site_url('admin/status_ubah');?>">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><?php echo $notif;?> Transaksi hari ini</h4>
                                                <p>
                                                    <!-- <i class="material-icons">access_time</i> 14 mins ago -->
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                   <!--  <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-purple">
                                                <i class="material-icons">settings</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Settings updated</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </p>
                                            </div>
                                        </a>
                                    </li> -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    
                    <!-- #END# Tasks -->
                    <!-- <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo site_url ('assets/images/user.png')?>" width="48" height="48" alt="User" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"/>
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #000; font-weight: bold;"><?php echo $this->session->userdata('ses_nama') ?></div>
                    <div class="email" style="color: #000;">@hoirul_09</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <!-- <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li> -->
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo base_url()?>login/logout"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="<?php echo site_url('Admin/')?>">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <?php if ($this->session->userdata('akses') == 'admin') { ?>
                    <li>
                        <a href="<?php echo site_url('Admin/Data_barang')?>">
                            <i class="material-icons">view_list</i>
                            <span>Data Barang</span>
                        </a>
                    </li>
                    <?php }?>
                    <li>
                        <a href="<?php echo site_url('Admin/Data_beli')?>">
                            <i class="material-icons">view_list</i>
                            <span>Data Order</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Admin/Data_jual')?>">
                            <i class="material-icons">view_list</i>
                            <span>Data Penjualan</span>
                        </a>
                    </li>
                    <?php if ($this->session->userdata('akses') == 'admin') { ?>
                    <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">list</i>
                            <span>Tabel</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo site_url('Admin/Data_order')?>">Tabel Detail Order</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('Admin/Data_user')?>">Tabel User</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('Admin/Data_kategori')?>">Tabel Kategori</a>
                            </li>
                        </ul>
                     <?php } ?>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">print</i>
                            <span>Laporan</span>
                        </a>
                        <ul class="ml-menu">
                             <li>
                                <a href="<?php echo site_url('Admin/Laporan_order')?>">Report Order</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('Admin/Laporan_barang')?>">Report Barang</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('Admin/Laporan_penjualan')?>">Report Penjualan</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <!-- <a href="pages/changelogs.html">
                            <i class="material-icons">update</i>
                            <span>Changelogs</span>
                        </a> -->
                    </li>
                    <li class="header">LABELS</li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; <?php echo date('Y') ?> <a href="javascript:void(0);">Coopmart - Almuawanah</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
    <div class="container-fluid">
        <?php echo $content; ?>
    </div>
    </section>

    <!-- Jquery Core Js -->
  
    <script type="text/javascript">    
         // $('li').click(function() {
         //     $('li').removeClass('active');
         //     $(this).addClass('active');
         // });
    jQuery(function ($) {
    $("ul a")
        .click(function(e) {
            var link = $(this);
            var item = link.parent("li"); 
            if (item.hasClass("active")) {
                item.removeClass("active").children("a").removeClass("active");
            } else {
                item.addClass("active").children("a").addClass("active");
            }

            if (item.children("ul").length > 0) {
                var href = link.attr("href");
                link.attr("href", "#");
                setTimeout(function () { 
                    link.attr("href", href);
                }, 300);
                e.preventDefault();
            }
        })
        .each(function() {
            var link = $(this);
            if (link.get(0).href === location.href) {
                link.addClass("active").parents("li").addClass("active");
                return false;
            }
        });
    });

    </script>
    <!-- Bootstrap Core Js -->
    <script src="<?php echo site_url ('assets/plugins/bootstrap/js/bootstrap.js')?>"></script>

    <!-- Select Plugin Js -->
    <!-- <script src="<?php echo site_url ('assets/plugins/bootstrap-select/js/bootstrap-select.js')?>"></script> -->

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo site_url ('assets/plugins/jquery-slimscroll/jquery.slimscroll.js')?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo site_url ('assets/plugins/node-waves/waves.js')?>"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo site_url('assets/plugins/jquery-datatable/jquery.dataTables.js')?>"></script>
    <script src="<?php echo site_url('assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')?>"></script>
    <script src="<?php echo site_url('assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')?>"></script>
    <script src="<?php echo site_url('assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')?>"></script>
    <script src="<?php echo site_url('assets/plugins/jquery-datatable/extensions/export/jszip.min.js')?>"></script>
    <script src="<?php echo site_url('assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js')?>"></script>
    <script src="<?php echo site_url('assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js')?>"></script>
    <script src="<?php echo site_url('assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')?>"></script>
    <script src="<?php echo site_url('assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js')?>"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="<?php echo site_url ('assets/plugins/jquery-countto/jquery.countTo.js')?>"></script>

    <!-- Morris Plugin Js -->
    <script src="<?php echo site_url ('assets/plugins/raphael/raphael.min.js')?>"></script>
    <script src="<?php echo site_url ('assets/plugins/morrisjs/morris.js')?>"></script>

    <!-- ChartJs -->
    <script src="<?php echo site_url ('assets/plugins/chartjs/Chart.bundle.js')?>"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="<?php //echo site_url ('assets/plugins/flot-charts/jquery.flot.js')?>"></script>
    <script src="<?php //echo site_url ('assets/plugins/flot-charts/jquery.flot.resize.js')?>"></script>
    <script src="<?php //echo site_url ('assets/plugins/flot-charts/jquery.flot.pie.js')?>"></script>
    <script src="<?php //echo site_url ('assets/plugins/flot-charts/jquery.flot.categories.js')?>"></script>
    <script src="<?php //echo site_url ('assets/plugins/flot-charts/jquery.flot.time.js')?>"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="<?php echo site_url ('assets/plugins/jquery-sparkline/jquery.sparkline.js')?>"></script>

    <!-- Custom Js -->
    <script src="<?php echo site_url ('assets/js/pages/ui/modals.js')?>"></script>
    <script src="<?php echo site_url ('assets/js/admin.js')?>"></script>
    <script src="<?php echo site_url ('assets/js/pages/tables/jquery-datatable.js')?>"></script>
    <script src="<?php echo site_url ('assets/js/pages/ui/dialogs.js')?>"></script>
    <script src="<?php //echo site_url ('assets/js/pages/index.js')?>"></script>
    <script src="<?php //echo site_url ('assets/js/pages/forms/form-validation.js')?>"></script> 
    <!-- SweetAlert Plugin Js -->
   
    <!-- Demo Js -->
    <script src="<?php echo site_url ('assets/js/demo.js')?>"></script>
    <script type="text/javascript">
            $(function () {
            //Widgets count
            $('.count-to').countTo();
            //Sales count to
            $('.sales-count-to').countTo({
                formatter: function (value, options) {
                    return '$' + value.toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, ' ').replace('.', ',');
                }
            });
        });
    </script>
</body>

</html>
