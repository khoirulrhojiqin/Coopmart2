<style type="text/css">
  .color{
    background-color: #efefef;
    color: #353535;
  }
  .th-size{
    font-weight: bold;
  }
  .tbody-size{
    font-weight: bold;
  }
</style>

<?php echo $this->session->flashdata('notifhapus');?>
<?php //echo $this->session->flashdata('notifubah');?>
<?php echo $this->session->flashdata('notifstok');?>


<br>
<div class="row">
    <!--Panel-->
<div class="col-sm-12">
   <div class="card">
    <h3 class="card-header">Daftar Belanja</h3>
      <div class="card-body">
          <form action="<?php echo base_url()?>user/shopping/ubah_cart" method="post" name="frmShopping" id="frmShopping" class="form-horizontal" enctype="multipart/form-data">
          <?php
          	if ($cart = $this->cart->contents())
          		{
           ?>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Item</th>
                  <th scope="col">Harga</th>
                  <th scope="col"><center>Qty</center></th>
                  <th scope="col">Jumlah</th>
                  <th scope="col">Hapus</th>
                </tr>
            </thead>
          <?php
          $grand_total = 0;
          $i = 1;

          foreach ($cart as $item):
          $grand_total = $grand_total + $item['subtotal'];
          ?>
          <!-- <input type="hidden" name="id" value="<?php //echo $item['id'];?>" /> -->
          <input type="hidden" name="cart[<?php echo $item['id'];?>][id]" value="<?php echo $item['id'];?>" />
          <input type="hidden" name="cart[<?php echo $item['id'];?>][rowid]" value="<?php echo $item['rowid'];?>" />
          <input type="hidden" name="cart[<?php echo $item['id'];?>][name]" value="<?php echo $item['name'];?>" />
          <input type="hidden" name="cart[<?php echo $item['id'];?>][price]" value="<?php echo $item['price'];?>" />
          <input type="hidden" name="cart[<?php echo $item['id'];?>][gambar]" value="<?php echo $item['gambar'];?>" />
          <input type="hidden" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>" />
          <tbody>
              <tr>
                <td><?php echo $i++; ?></td>
                <td><img class="img-responsive" width="200px" height="200px" src="<?php echo base_url() . 'assets/upload/files/'.$item['gambar']; ?>"/></td>
                <td>
                  <?php echo $item['name']; ?>
                </td>
                <td>Rp <?php echo number_format($item['price'], 0,",","."); ?></td>
                <!-- button -->
                <td>
                    <center>
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <!-- <button type="button" class='btn btn-sm color' onclick='minus();'><i class="fa fa-minus"></i></button>  -->
                            <input type="number" id="count" class="form-control input-sm size-col" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>" />
                        <!-- <button type="button" class='btn btn-sm color' onclick='plus();'><i class="fa fa-plus"></i></button> -->
                      </div>
                    </center> 
                </td>
                <!-- End button -->
                <td>Rp <?php echo number_format($item['subtotal'], 0,",",".") ?></td>
                <td>
                      <a href="<?php echo base_url()?>user/shopping/hapus/<?php echo $item['rowid'];?>" class="btn btn-sm btn-danger"><i class="fa fa-times-circle" aria-hidden="true"></i></a><!-- 
                      <a href="<?php //echo base_url()?>user/shopping/ubah_cart/<?php //echo $item['id'];?>" class="btn btn-sm btn-success"><i class="fa fa-refresh" aria-hidden="true"></i></a> -->
                </td>
                <?php endforeach; ?>
            </tr>
          </tbody>
          <tr>
          <td colspan="2"><b>Order Total: Rp <?php echo number_format($grand_total, 0,",","."); ?></b></td>
          <td colspan="5" align="right">
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class='btn btn-sm btn-danger' data-toggle="modal" data-target="#myModal">
                    <i class="fa fa-trash-o"></i> Kosongkan
                </button>
                <button class='btn btn-sm btn-success'  type="submit">
                    <i class="fa fa-refresh" aria-hidden="true"></i> Update
                 </button>

                <a href="<?php echo base_url()?>user/shopping/check_out" class ='btn btn-sm btn-primary'><i class="fa fa-shopping-cart"></i> Check Out</a>
            </div>
          </td>
          </tr>

          </table>
          </div>
          <?php
          		}
          	else
          		{
          			echo "<center><h3>Keranjang Belanja kosong</h3></center>";	
          		}	
          ?>
          </form>
        </div>
      </div>
    </div>
  </div>
<br>
              
<!-- <script type="text/javascript">
    var counter = '<?php //echo $item['qty'];?>';
    function plus(val){
          counter++;
          document.getElementById('count').value=counter;  
    } 
    function minus(val){
          counter--;
          document.getElementById('count').value=counter;  
    } 
</script> -->
