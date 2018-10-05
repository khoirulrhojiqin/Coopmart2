<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Copmart Almuawanah</title>
    <link rel="icon" href="<?php echo site_url('assets/images/logo.png')?>" type="image/x-icon">
  <!-- <link href="<?php //echo base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">     -->
  <link href="http://allfont.net/allfont.css?fonts=brodyd" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url()?>assets/front_end/assets/MDB/css/font-awesome.min.css" rel="stylesheet">   
  <link href="<?php echo base_url()?>assets/front_end/assets/MDB/font-awesome/web-fonts-with-css/css/fontawesome.min.css" rel="stylesheet"> 
 <!--  Font Awesome -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">   -->
  <link href="<?php echo base_url()?>assets/front_end/assets/MDB/css/bootstrap.min.css" rel="stylesheet">   
  <link href="<?php echo base_url()?>assets/front_end/assets/MDB/css/mdb.css" rel="stylesheet">  
	<link href="<?php echo base_url()?>assets/front_end/assets/MDB/css/style.min.css" rel="stylesheet">  
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url()?>assets/front_end/assets/asie/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Sweetalert Css -->
  <link href="<?php echo base_url()?>assets/front_end/assets/MDB/toastr/build/toastr.min.css" rel="stylesheet">  
  <link href="<?php echo site_url ('assets/plugins/sweetalert/sweetalert.css')?>" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <!-- <link href="<?php echo base_url()?>assets/front_end/assets/custom.css" rel="stylesheet"> -->
    <link href="<?php echo base_url()?>assets/front_end/assets/jquery/jquery-ui.css" rel="stylesheet">
    <!-- <script src="<?php echo base_url()?>assets/front_end/assets/asie/js/ie-emulation-modes-warning.js"></script> -->
    <style type="text/css">
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }
    .size-col{
      width: 60px;
      }
    @media (max-width: 740px) {
      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
      .size-col{
      width: 60px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
       .size-col{
      width: 60px;
      }
    }
  </style>
  <script type="text/javascript" src="<?php echo base_url()?>assets/front_end/assets/MDB/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/front_end/assets/MDB/toastr/toastr.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/front_end/assets/js/jquery_ui.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/front_end/assets/js/jquery.mousewheel.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/print-area.js"></script>
  <script src="<?php echo site_url ('assets/plugins/sweetalert/sweetalert.min.js')?>"></script>
  <script type="text/javascript">
   $("#alert-target").click(function () {
      toastr["info"]("I was launched via jQuery!")
  });
  // Command: toastr["success"]("Loggin successfully!") 
  toastr.options = {
    "closeButton": true, // true/false
    "debug": false, // true/false
    "newestOnTop": false, // true/false
    "progressBar": false, // true/false
    "positionClass": "toast-top-right", // toast-top-right / toast-top-left / toast-bottom-right / toast-bottom-left
    "preventDuplicates": false, //true/false
    "onclick": null,
    "showDuration": "300", // in milliseconds
    "hideDuration": "1000", // in milliseconds
    "timeOut": "5000", // in milliseconds
    "extendedTimeOut": "1000", // in milliseconds
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}
  </script>
</head>
<body>
 <?php echo $this->session->flashdata('notifubah');?>
  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="<?php echo base_url()?>user/page/index">
        <!-- <strong style="font-family: BrodyD; color: #c30f42; font-size: 27px;">CoopMart.id</strong> -->
        <img src="<?php echo base_url('assets/images/header2.png')?>" height="40px" width="60px">
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link waves-effect" href="<?php echo base_url()?>user/page/index">Beranda
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="<?php echo base_url()?>user/page/tentang">Tentang</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link waves-effect" href="<?php echo base_url()?>user/page/cara_bayar">Cara Bayar</a>
          </li> -->
        </ul>
        <!---cart-->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a class="nav-link waves-effect" href="<?php echo base_url()?>user/shopping/carts">
              
              <span class="detail_cart badge red z-depth-1 mr-1"></span>

              <i class="fa fa-shopping-cart"></i>
              <span class="clearfix d-none d-sm-inline-block"> Keranjang </span>
            </a>
          </li>
        </ul>
        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="" class="nav-link waves-effect" data-toggle='modal' data-target='#contact'>
              <i class="fa fa-envelope"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect" target="_blank">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
           <!-- <li class="nav-item">
            <a class="nav-link waves-effect" href="<?php echo base_url()?>login/logout">
              <i class="fa fa-logout"></i>
              <i class="fa fa-sign-out" aria-hidden="true"></i>
            </a>
          </li> -->
           <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="" data-toggle="modal" data-target="#modalLRForm">My account</a>
                    <a class="dropdown-item" href="<?php echo base_url()?>login/logout">Log out</a>
                </div>
            </li>
         
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->
  <!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade pt-4" data-ride="carousel">

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">
        <div class="view" style="background-image: url('<?php echo site_url('assets/images/background.jpg')?>'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>Coop Mart Al-Muawanah</strong>
              </h1>

              <p>
                <strong>Pesan kebutuhan pokok sehari-hari anda disini !</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong>Menyediakan berbagai macam jenis kebutuhan pokok sehari-hari, anda dapat dengan mudah memesan di website kami. Kami akan merespon cepat pesanan anda dan mengantarkanya langsung ke tempat anda</strong>
              </p>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/First slide-->

      <!--Second slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('<?php echo site_url('assets/images/image-gallery/22.jpg')?>'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>Coop Mart Al-Muawanah</strong>
              </h1>

              <p>
                <strong>Pesan kebutuhan pokok sehari-hari anda disini !</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong>Menyediakan berbagai macam jenis kebutuhan pokok sehari-hari, anda dapat dengan mudah memesan di website kami. Kami akan merespon cepat pesanan anda dan mengantarkanya langsung ke tempat anda</strong>
              </p>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Second slide-->

      <!--Third slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('<?php echo site_url('assets/images/image-gallery/23.jpg')?>'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>Coop Mart Al-Muawannah</strong>
              </h1>

              <p>
                <strong>Pesan kebutuhan pokok sehari-hari anda disini !</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong>Menyediakan berbagai macam jenis kebutuhan pokok sehari-hari, anda dapat dengan mudah memesan di website kami. Kami akan merespon cepat pesanan anda dan mengantarkanya langsung ke tempat anda</strong>
              </p>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Third slide-->

    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->

  </div>
  <!--/.Carousel Wrapper-->
  <!--Main layout-->
  <main>
    <div class="container">


 <!-- Modal Penilai -->
  <div class="modal fade" id="myModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-warning" role="document">
      <!-- Modal content-->
      <div class="modal-content">
        <form method="post" action="<?php echo base_url()?>user/shopping/hapus/all">
        <div class="modal-header">
           <h4 class="heading lead">Konfirmasi</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="white-text">&times;</span>
          </button>         
        </div>
        <div class="modal-body">
             <div class="text-center justify-content-center">
                <p>Anda yakin mau mengosongkan Shopping Cart?</p>   
             </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-outline-warning waves-effect" data-dismiss="modal">Tidak</button>
          <button type="submit" class="btn btn-sm btn-warning">Ya</button>
        </div>
        
        </form>
      </div>
      
    </div>
  </div>
  <!--End Modal-->
  <!-- My Modal Informasi Stok Kosong -->
  <!-- Frame Modal Bottom -->
<div class="modal fade bottom" id="frameModalBottom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row d-flex justify-content-center align-items-center">

            <p class="pt-3 pr-2">Maaf Barang yang anda pilih tidak tersedia
            </p>

            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- </div> -->
  </div>
  <!-- Frame Modal Bottom -->
  <!--End Modal-->
  <!-- Modal Contact -->
  <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header darken-3 white-text" style="background-color: #2bbbad !important;">
                <h4 class="title"><i class="fa fa-pencil"></i> Contact form</h4>
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <!--Body-->
            <form>
            <div class="modal-body mb-0">
                <div class="md-form form-sm">
                    <i class="fa fa-user prefix active"></i>
                    <input type="text" id="form8" class="form-control">
                    <label for="form8" class="active">Your name</label>
                </div>

                <div class="md-form form-sm">
                    <i class="fa fa-envelope prefix active"></i>
                    <input type="email" id="form9" class="form-control">
                    <label for="form9" class="active">Your email</label>
                </div>

                <div class="md-form form-sm">
                    <i class="fa fa-tag prefix"></i>
                    <input type="search" id="form-autocomplete-2" class="form-control mdb-autocomplete">
                    <label for="form-autocomplete-2" class="active">Subject</label>
                </div>

                <div class="md-form form-sm">
                    <i class="fa fa-pencil prefix"></i>
                    <textarea type="text" id="form67" class="md-textarea mb-0"></textarea>
                    <label for="form67">Your message</label>
                </div>

                <div class="text-center mt-1-half">
                    <button class="btn mb-2 waves-effect waves-light" style="background-color: #39a298 !important;">Send <i class="fa fa-send ml-1"></i></button>
                </div>
            </div>
          </form>
        </div>
        <!--/.Content-->
    </div>
</div>
  <!-- End Modal Contact -->
  <!-- Modal Profil -->
  <!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> <div class="modal-dialog cascading-modal" role="document">
        <div class="modal-content">
            <div class="modal-c-tabs">
                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab" style="background-color: #c30f42 !important;"><i class="fa fa-user mr-1" ></i> My Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel8" role="tab" style="background-color: #c30f42 !important;"><i class="fa fa-pencil mr-1"></i> Edit Profil</a>
                    </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 7-->
                    <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                        <!--Body-->
                        <div class="modal-body mb-1">
                            <table cellspacing="5px" cellpadding="5px" class="table table-hover">
                              <?php 
                              $ses = $this->session->userdata('ses_id');
                              $query = $this->db->query("SELECT * FROM tabel_user WHERE id_user=$ses")->result();
                              ?>
                              <?php foreach ($query as $isi):?>
                                <tr>
                                <th>NIP</th>
                                <td>:</td>
                                <td><?php echo $isi->nip;?></td>
                              </tr>
                              <tr>
                                <th>Nama</th>
                                <td>:</td>
                                <td><?php echo $isi->nama;?></td>
                              </tr>
                              <tr>
                                <th>Telepon</th>
                                <td>:</td>
                                <td><?php echo $isi->telepon;?></td>
                              </tr>
                              <?php endforeach; ?>
                              
                            </table>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal" style="border: 2px solid #c30f42 !important; color: #c30f42 !important;">Close</button>
                        </div>

                    </div>
                    <!--/.Panel 7-->

                    <!--Panel 8-->
                    <div class="tab-pane fade" id="panel8" role="tabpanel">

                        <!--Body-->
                      <?php 
                        $ses = $this->session->userdata('ses_id');
                        $username = $this->session->userdata('ses_name');
                        $query = $this->db->query("SELECT * FROM tabel_user WHERE id_user=$ses")->result();
                      ?>
                      <?php foreach ($query as $isi):?>
                        <div class="modal-body">
                        <form action="<?php echo base_url('user/Shopping/ubah_user') ?>" method="POST">
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-pencil prefix"></i>
                                <input type="hidden" name="id_user" value="<?php echo $ses; ?>">
                                <input type="text" name="nip" class="form-control form-control-sm validate" value="<?php echo $isi->nip;?>">
                                <label data-error="wrong" data-success="right" for="modalLRInput12">NIP</label>
                            </div>
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-pencil prefix"></i>
                                <input type="text" name="nama" class="form-control form-control-sm validate" value="<?php echo $isi->nama;?>">
                                <label data-error="wrong" data-success="right" for="modalLRInput13">Nama</label>
                            </div>
                            <div class="md-form form-sm mb-4">
                                <i class="fa fa-phone prefix"></i>
                                <input type="text" name="telepon" class="form-control form-control-sm validate" value="<?php echo $isi->telepon;?>">
                                <label data-error="wrong" data-success="right" for="modalLRInput14">Telepon</label>
                            </div>
                            <div class="md-form form-sm mb-4">
                                <i class="fa fa-user prefix"></i>
                                <input type="text" name="username" class="form-control form-control-sm validate" value="<?php echo $username;?>" required>
                                <label data-error="wrong" data-success="right" for="modalLRInput14">Username <b style="color: red;">*</b></label>
                            </div>
                            <div class="md-form form-sm mb-4">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" name="password" class="form-control form-control-sm validate" required>
                                <label data-error="wrong" data-success="right" for="modalLRInput14">Password <b style="color: red;">*</b></label>
                            </div>
                        <?php endforeach;?>
                            <div class="text-center form-sm mt-2">
                                <button class="btn btn-info" style="background-color: #c30f42 !important;">Save <i class="fa fa-save ml-1"></i></button>
                            </div>
                        </form>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal" style="border: 2px solid #c30f42 !important; color: #c30f42 !important;">Close</button>
                        </div>
                    </div>
                    <!--/.Panel 8-->
                </div>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>

  <!-- End Modal Profil -->
  <script type="text/javascript">
  $(document).ready(function(){
    $('.add_cart').click(function(){
      var id_barang    = $(this).data("produkid");
      var nama_barang  = $(this).data("produknama");
      var harga_jual = $(this).data("produkharga");
      var gambar = $(this).data("produkgambar");
      var qty     = $('#' + id_barang).val();
      $.ajax({
        url : "<?php echo base_url();?>user/shopping/add_to_cart",
        method : "POST",
        data : {id_barang: id_barang, nama_barang: nama_barang, harga_jual: harga_jual, gambar: gambar, qty: qty},
        success: function(data){
          $('.detail_cart').html(data);
        }
      });
    });

    // Load shopping cart
    $('.detail_cart').load("<?php echo base_url();?>user/shopping/load_cart");
  });
</script>