
<!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark lighten-1 mt-3 mb-5" style="background-color: #c30f42">
        <!-- Navbar brand -->
        <span class="navbar-brand">Categories:</span>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">
          <!-- Links -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>user/shopping/index/">All</a>
            </li>
            <?php
                foreach ($kategori->result() as $row) 
              { ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>user/shopping/index/<?php echo $row->id_kategori;?>"><?php echo substr($row->nama_kategori,7,15);?>
              </a>
            </li>
            <?php } ?>
          </ul>
          <!-- Links -->
       
          <!-- <?php //echo form_open('user/shopping/search') ?>          
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" name="keyword" id="search_text" placeholder="Search" aria-label="Search">
            </div>         
        <?php //echo form_close() ?> -->
        <form method='post' action="<?php echo base_url();?>user/shopping/pencarian" >
          <div class="md-form my-0">
           <input class="form-control mr-sm-2" type='text' name='search' name='submit' value='<?php $search ?>' placeholder="Search">
           <input type='hidden' name='submit' value='Submit'>
         </div>
        </form>
        </div>
        <!-- Collapsible content -->
      </nav>
      <!--/.Navbar-->
      <!--Section: Products v.3-->
      <section class="text-center mb-4">
        
        <!--Grid row-->
        <div class="row wow fadeIn" idxx="result">
          <?php
          foreach ($result->result() as $row):?> 
            
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">
            <!--Card-->
            <div class="card" >
              <!--Card image-->
              <div class="view overlay">
                
                <img src="<?php echo base_url() . 'assets/upload/files/'.$row->gambar; ?>" width="240px" height="240px" class="card-img-top" alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->
              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a class="dark-grey-text">
                  <h5><strong>
                   
                      <?php 
                      $num_char = 20;
                      $text = $row->nama_barang;
                      $amount     = strlen($text);
                      if($amount > $num_char) {
                      $char     = $text{$num_char - 1};
                          while($char != ' ') {
                            $char = $text{--$num_char}; // Cari spasi pada posisi 49, 48, 47, dst...
                          }
                          echo substr($text, 0, $num_char);
                      } else {
                          echo $text;
                      }
                      ?>
                    </strong></h5>
                </a>
                <h5>
                    <a class="grey-text" style="font-size: 15px;">
                      <?php 
                      $num_char = 35;
                      $text = $row->deskripsi;
                      $amount     = strlen($text);
                      if($amount > $num_char) {
                      $char     = $text{$num_char - 1};
                          while($char != ' ') {
                            $char = $text{--$num_char}; // Cari spasi pada posisi 49, 48, 47, dst...
                          }
                          echo substr($text, 0, $num_char).'...';
                      } else {
                          echo $text;
                      }
                      ?>
                    </a>
                </h5>
               
                <h4 class="font-weight-bold blue-text">
                  <strong>Rp. <?php echo number_format($row->harga_jual,0,",",".");?></strong>
                </h4>
              </div>
              <!--Card content-->
              <center><div class="card-footer">
                  
                      <a href="<?php echo base_url();?>user/shopping/detail_produk/<?php echo $row->id_barang;?>" class="btn btn-success btn-sm"><i class="fa fa-search-plus" aria-hidden="true"></i> Detail</a> 
                 
               
                  <input type="hidden" name="qty" id="<?php echo $row->id_barang;?>" class="qty" value="1" /> 
                  <!-- <input type="hidden" name="kat_id" value="<?=$id_kategori?>" /> -->
                  <?php
                   if ($row->stok>0) {
                  echo "<button type='submit' class='add_cart btn btn-sm' style='background-color: #c30f42;' data-produkid=".$row->id_barang." data-produknama=".$row->nama_barang." data-produkharga=".$row->harga_jual." data-produkgambar=".$row->gambar."><i class='fa fa-shopping-cart'></i> Beli</button>";
                  }else{
              
                   echo  "<a class='btn btn-sm' style='background-color: #c30f42;' data-toggle='modal' data-target='#frameModalBottom' data-backdrop='false'>
                          <i class='fa fa-shopping-cart'></i> Beli</a>"; 
                  }
                  ;?>

                </div></center>
              <!-- </form> -->
            </div>
            <!--Card-->
          </div>
          <!--Grid column-->
<?php endforeach; ?>
        
        </div>
        <!--Grid row-->
      </section>
      <!--Section: Products v.3-->
 <!--Pagination-->
 <div class="page">
      <nav class="d-flex justify-content-center wow fadeIn">
        <ul class="pagination pg-blue">

          <li class="page-item">
            <a class="page-link" href="#">
               <?php echo $pagination; ?>
            </a>
          </li>
          
        </ul>
      </nav>
    </div>
  <script>
</script>
