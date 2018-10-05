<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Login CoopMart.id</title>
  <link rel="icon" href="<?php echo site_url('assets/images/logo.png')?>" type="image/x-icon">
  <!-- Font Awesome -->
  <link href="<?php echo base_url()?>assets/front_end/assets/MDB/css/font-awesome.min.css" rel="stylesheet">   
  <link href="<?php echo base_url()?>assets/front_end/assets/MDB/font-awesome/web-fonts-with-css/css/fontawesome.min.css" rel="stylesheet"> 
 <!--  Font Awesome -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">   -->
  <link href="<?php echo base_url()?>assets/front_end/assets/MDB/css/bootstrap.min.css" rel="stylesheet">   
  <link href="<?php echo base_url()?>assets/front_end/assets/MDB/css/mdb.css" rel="stylesheet">  
  <link href="<?php echo base_url()?>assets/front_end/assets/MDB/css/style.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <style type="text/css">
    html,
    body,
    header,
    .view {
      height: 100%;
    }

    @media (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 1000px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .view {
        height: 650px;
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {
              .navbar:not(.top-nav-collapse) {
                  background: #1C2331!important;
              }
          }
  </style>
</head>

<body>


  <!-- Full Page Intro -->
  <div class="view full-page-intro" style="background-image: url('<?php echo base_url('assets/images/background.jpg')?>'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="container">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-md-6 mb-4 white-text text-center text-md-left">

            <h1 class="display-4 font-weight-bold">Selamat Datang <br>di CoopMart.id</h1>

            <hr class="hr-light">

            <p>
              <strong>Sistem pemesanan barang khusus pegawai UIN Alauddin Makassar</strong>
            </p>

            <p class="mb-4 d-none d-md-block">
              <strong>Anda dapat memesan berbagai macam produk makanan dan kebutuhan pokok sehari-hari di toko kami</strong>
            </p>
          </div>
          <div class="col-md-6 col-xl-5 mb-4">
            <div class="card">
              <div class="card-body">
                <?php echo $this->session->flashdata('msg');?>
                <!-- Form -->
                <form action="<?php echo base_url().'login/auth'?>" method="POST">
                  <!-- Heading -->
                  <h3 class="dark-grey-text text-center">
                    <strong>Coop Mart Al-Muawanah</strong>
                  </h3>
                  <hr>
                  <div class="md-form">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="username" name="username" required="required" class="form-control">
                    <label for="form3">Username</label>
                  </div>
                  <div class="md-form">
                    <i class="fa fa-key prefix grey-text"></i>
                    <input type="password" id="password" name="password" required="required" class="form-control">
                    <label for="form2">Password</label>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-indigo" style="background-color: #c30f42 !important;">Login</button>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="<?php echo base_url()?>assets/front_end/assets/MDB/js/jquery-3.3.1.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url()?>assets/front_end/assets/MDB/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url()?>assets/front_end/assets/MDB/js/mdb.min.js"></script>
  <!-- Bootstrap core JavaScript -->
 <script src="<?php echo base_url()?>assets/front_end/assets/MDB/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>

</html>