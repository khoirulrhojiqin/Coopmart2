<style type="text/css">
  .qty{
    padding: .175rem .75rem; width: 50px;
  }
  .btna{
    padding: 0.2rem 0.9rem; 
    color: #666666; 
    border: none; 
    cursor: pointer;
  }
</style>
<br>
<div class="container">
<h2><center><?php echo $detail['nama_barang'];?></center></h2>
</div><hr>
	<div class="row wow fadeIn">
	      <div class="col-md-5 mb-4">
          <img class="img-responsive img-fluid z-depth-1" src="<?php echo base_url() . 'assets/upload/files/'.$detail['gambar']; ?>" alt="" width="300" height="300" >
        </div>
        <!--Grid column-->
        <div class="col-md-7 mb-4">
        	 <!--Content-->
          <div class="p-4">
          		<h4 class="font-weight-bold blue-text">
                 	 <strong>Harga: Rp. <?php echo number_format($detail['harga_jual'],0,",",".");?></strong>
                </h4>
            <p class="lead font-weight-bold">Deskripsi</p>

            <p><?php echo $detail['deskripsi'];?></p>

            	<?php 
                    if ($detail['stok']>0) {
                      echo "<span style='color:#2196f3;'>Tersisa ".$detail['stok'].' buah</span>';
                    }else{
                      echo "<span style='color:red;'>Tersisa ".$detail['stok'].' buah</span>';
                    }
                    ;?><br>
					  
            <!-- <input type="text" name="qty" id="<?php// $id=$detail['id_barang']; echo $detail['id_barang'];?>" value="1" class="form-control input-sm size-col" /> -->
            <div class="btn-group" role="group" aria-label="Basic example">
              <button  id="minus" class='btna'  onclick='minus();'><i class="fa fa-minus"></i></button>
                 <input type="text" name="qty" id="<?php $id=$detail['id_barang']; echo $detail['id_barang'];?>" class="qty form-control input-sm" value="1"/>
              <button value="+" id="plus" class='btna' onclick='plus();'><i class="fa fa-plus"></i></button>
            </div><br><br>

              <!-- Default input -->
				 <?php
				    if ($detail['stok']>0) {
				  	echo "<button type='submit' class='add_cart btn btn-lg' style='background-color: #c30f42;' data-produkid=".$detail['id_barang']." data-produknama=".$detail['nama_barang']." data-produkharga=".$detail['harga_jual']." data-produkgambar=".$detail['gambar']."><i class='fa fa-shopping-cart'></i> Beli</button>";
					}else{
				   	echo "<button class='btn btn-lg' style='background-color: #c30f42;' disabled><i class='fa fa-shopping-cart' aria-hidden='true'></i> Beli</button>";
					}
				;?>

          </div>
        </div>
      </div>
     
        <br>
        <h5 style="font-weight: bold;">Produk Serupa</h5>
        <hr>
        <section class="text-center mb-4">
        <!--Grid row-->
        <div class="row wow fadeIn" idxx="result">
          <?php 
          $kategori=$detail['kategori'];
          $query = $this->db->query("SELECT * from tabel_barang where kategori='$kategori' order by rand() limit 6")->result();
          
          foreach ($query as $produk):?>
            <?php
              if ($produk->nama_barang!= $detail['nama_barang']) {?>
             
                 <div class="col-md-2 col-md-2 mb-4">
                  <div class="card" > 
                    <div class="view overlay">                
                    <img src="<?php echo base_url() . 'assets/upload/files/'.$produk->gambar; ?>" width="140px" height="140px" class="card-img-top" alt="">
                    <a href="<?php echo base_url();?>user/shopping/detail_produk/<?php echo $produk->id_barang;?>">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <div class="card-body text-center">  
                  <span>
                    <a href="<?php echo base_url();?>user/shopping/detail_produk/<?php echo $produk->id_barang;?>" class="grey-text" style="font-size: 15px;">
                      <?php 
                      $num_char = 25;
                      $text = $produk->deskripsi;
                      $amount     = strlen($text);
                      if($amount > $num_char) {
                      $char     = $text{$num_char - 1};
                          while($char != ' ') {
                            $char = $text{--$num_char}; // Cari spasi pada posisi 49, 48, 47, dst...
                          }
                          echo substr($text, 0, $num_char).' ...<br>';
                      } else {
                          echo $text;
                      }
                      ?>
                    </a>
                    <div style="color: #c30f42">Rp.<?php echo number_format($produk->harga_jual,2,',','.') ;?></div>
                </span>
                </div>

                </div>
              </div>
                   
            <?php }?>
          <?php endforeach;?>
        </div>
      </section>


<script type="text/javascript">
    // var counter = 1;
    // function plus(val){
    //       counter++;
    //       document.getElementById("<?php echo $id;?>").value=counter;  
    // } 
    // function minus(val){
    //       counter--;
    //       document.getElementById("<?php echo $id;?>").value=counter;  
    // }
    var count = 1;
    var countEl = document.getElementById("<?php echo $id;?>");
    function plus(){
        count++;
        countEl.value = count;
    }
    function minus(){
      if (count > 1) {
        count--;
        countEl.value = count;
      }  
    } 
</script>