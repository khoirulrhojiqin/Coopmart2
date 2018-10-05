<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Copmart Almuawanah</title>
    <link rel="icon" href="<?php echo site_url('assets/favicon.ico')?>" type="image/x-icon">
  <!-- <link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">     -->
  <link href="<?php echo base_url()?>assets/front_end/assets/MDB/css/font-awesome.min.css" rel="stylesheet">   
  <link href="<?php echo base_url()?>assets/front_end/assets/MDB/font-awesome/web-fonts-with-css/css/fontawesome.min.css" rel="stylesheet"> 
 <!--  Font Awesome -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">   -->
  <link href="<?php echo base_url()?>assets/front_end/assets/MDB/css/bootstrap.min.css" rel="stylesheet">   
  <link href="<?php echo base_url()?>assets/front_end/assets/MDB/css/mdb.css" rel="stylesheet">  
	<link href="<?php echo base_url()?>assets/front_end/assets/MDB/css/style.min.css" rel="stylesheet">  
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url()?>assets/front_end/assets/asie/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>assets/front_end/assets/custom.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/front_end/assets/jquery/jquery-ui.css" rel="stylesheet">

    <script src="<?php echo base_url()?>assets/front_end/assets/asie/js/ie-emulation-modes-warning.js"></script>
    <style type="text/css">
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (min-width: 576px) { 
      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
      td .size{
        width: 9vh;
      }
       .kotak {
      position: relative;
      display: block;
      margin-left: 0px;}
      .img-responsive{
        width: 200px;
        height: 200px;}
      }
    @media (max-width: 740px){
      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
      td .size{
        width: 9vh;
      }
       .kotak {
      position: relative;
      display: block;
      margin-left: 30px;}
      .img-responsive{
        width: 70px;
        height: 70px;}
      .footer{
        width: 100%;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
      td .size{
        width: 9vh;
      }
       .kotak {
      position: relative;
      display: block;
      margin-left: 0px; }
      .img-responsive{
        width: 70px;
        height: 70px;}
    }
    
  </style>
  </head>

  <body>
 <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="#" target="_blank">
        <strong style="font-family: BrodyD Regular; color: #2bbbad; font-size: 30px;">CoopMart.id</strong>
        <!-- <img src="<?php echo base_url()?>assets/images/ser.jpg"> -->
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
            <a class="nav-link waves-effect" href="<?php echo base_url()?>"><strong> Beranda</strong>
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="<?php echo base_url()?>user/page/tentang"><strong> Tentang</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="<?php echo base_url()?>user/page/cara_bayar"><strong> Cara Bayar</strong></a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link waves-effect" href="<?php echo base_url()?>shopping/tampil_cart">Keranjang</a>
          </li> -->
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a class="nav-link waves-effect" href="<?php echo base_url()?>user/shopping/tampil_cart">
              <?php 
      
        $cart= count($this->cart->contents());
             if(empty($cart)) {
            ?>
                      <span class="badge red z-depth-1 mr-1"> 0 </span>
            <?php }
            else{
               
            { ?>
      
                      <span class="badge red z-depth-1 mr-1"><?php echo $cart; ?></span>
            <?php } ?>
            <?php } ?>
              
              <i class="fa fa-shopping-cart"></i>
              <span class="clearfix d-none d-sm-inline-block"> Keranjang </span>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://www.facebook.com/mdbootstrap" class="nav-link waves-effect" target="_blank">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect" target="_blank">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link waves-effect" href="<?php echo base_url()?>login/logout">
              <i class="fa fa-logout"></i>
              <i class="fa fa-sign-out" aria-hidden="true"></i>
            </a>
          </li>
         
        </ul>

      </div>

    </div>
  </nav>

<!--Carousel Wrapper-->
    <!-- Begin page content -->

  <div class="container">
    <div class="row">

        <div class="col-lg-3">
          <main class="mt-2 pt-4">
          <div class="list-group">
          	<a class="list-group-item" style="background-color: #2bbbad; border-color: #2bbbad;"><strong style="color: #fff;">KATEGORI PRODUK</strong></a>
            <a href="<?php echo base_url()?>user/shopping/index/" class="list-group-item list-group-item-action waves-effect">Semua Produk</a>
          	<?php
		          	foreach ($kategori as $row) 
						{
			       ?>
            <a href="<?php echo base_url()?>user/shopping/index/<?php echo $row['id_kategori'];?>" class="list-group-item list-group-item-action waves-effect"><?php echo $row['nama_kategori'];?></a>
            <?php
						}
			         ?>
          </div><br>


           <div class="list-group">
           <a href="<?php echo base_url()?>user/shopping/tampil_cart" class="list-group-item" style="background-color: #2bbbad; border-color: #2bbbad; "><strong style="color: #fff;"><i class="fa fa-shopping-cart"></i> KERANJANG BELANJA</strong></a>
          <?php 
		  
		  	$cart= $this->cart->contents();
      			 if(empty($cart)) {
      				?>
                      <a class="list-group-item list-group-item-action waves-effect">Keranjang Belanja Kosong</a>
                      <?php
      			}
      			else
      				{
      					$grand_total = 0;
      					foreach ($cart as $item)
      						{
      							$grand_total+=$item['subtotal'];
      				?>
                      <a id="detail_cart" class="list-group-item list-group-item-action waves-effect"><?php echo $item['name']; ?> (<?php echo $item['qty']; ?> x <?php echo number_format($item['price'],0,",","."); ?>)=<?php echo number_format($item['subtotal'],0,",","."); ?></a>
                      <?php	
      						}
      				?>

                      <?php		
      				} ?>
			</div><br>
      </main>
        </div>
   
        <!-- /.col-lg-3 -->
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
    <!-- Add class .modal-frame and then add class .modal-bottom (or other classes from list above) to set a position to the modal -->
    <!-- <div class=" modal-bottom"> -->
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
     <!-- <div class="carousel-inner" role="listbox"> -->
        <div class="col-lg-9">
<section class="text-left mb-4">
<div class="row wow fadeIn"">

  