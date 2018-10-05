<style type="text/css">
    .btn-custom{
        background-color: #c30f42;
        color: #fff;
    }
    .btn-hover{
        background-color: #00786d;
    }
</style>
<br>
<!-- <div class="container">
<h2><center><strong> Konfirmasi Check Out</strong></center></h2><hr>
</div> -->
<!-- <div style="max-width: 80%; padding-left: 24%"> -->
<div class="row">
    <!--Panel-->
<div class="col-sm-7">
   <div class="card">
    <div class="card-header lighten-1">Detail Pembeli</div>
      <div class="card-body">
        <?php
        $grand_total = 0;
        if ($cart = $this->cart->contents())
        	{
        		foreach ($cart as $item)
        			{
        				$grand_total = $grand_total + $item['subtotal'];
        			}
        			
        ?>
        <form class="form-horizontal" action="<?php echo base_url()?>user/shopping/proses_order" method="post" name="frmCO" id="frmCO">     
            <?php
               
                         $id = $this->session->userdata('ses_id'); 
                         $nip = $this->session->userdata('ses_nip'); 
                         $nama = $this->session->userdata('ses_nama'); 
                         $telp = $this->session->userdata('ses_telp'); 
                         // var_dump($data1);  
                     
             ?>
                    <?php foreach ($cart as $item):?>                   
                        <input type="hidden" name='id[]' value='<?php echo $item['id'];?>'>                
                     <?php endforeach; ?>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">NIP</span>
                      </div>
                    <div class="col-xs-9">
                        <input type="hidden" name="id_user" id="id_user" value="<?php echo $id;?>">
                        <input type="text" class="form-control" name="nip" id="nip" value="<?php echo $nip;?>" readonly>
                    </div>
                    &nbsp;&nbsp;
               <!--  </div>
                    
                <div class="form-group  has-success has-feedback"> -->
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nama</span>
                      </div>
                    <div class="col-xs-9">
                        <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama;?>" readonly >
                    </div>
                </div>

               
                        <!-- <input type="text" name='total' value='<?php echo $grand_total;?>'>                -->
                        <input type="hidden" class="form-control" name="email" id="email" value="-">
             

                <div class="form-group  has-success has-feedback">
                    <label class="control-label col-xs-3" for="phoneNumber">Telp:</label>
                    <div class="col-xs-9">
                        <input type="text" class="form-control" name="telp" id="telp" value="<?php echo $telp;?>" placeholder="No Telp" required>
                    </div>
                </div>

                <div class="form-group  has-success has-feedback">
                    <label class="control-label col-xs-3" for="lastName">Lokasi Pengiriman:</label>
                    <div class="col-xs-9">
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Lokasi Pengiriman">
                    </div>
                </div>
            
                <div class="form-group  has-success has-feedback">
                    <label class="control-label col-xs-3" for="phoneNumber">Metode Transaksi:</label>
                    <div class="col-xs-9">
                        <select class="form-control" name="jns_transaksi" id="jns_transaksi">
                            <option>Tunai</option>
                            <option>Potong Gaji</option>
                        </select>
                    </div>
                </div>                
                
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-custom btn-md">Proses Order</button>
                    </div>
            </form>
            <?php
        	}
        	else
        		{
        			echo "<h5>Shopping Cart kosong</h5>";	
        		}
        	?>
        </div>
    </div>
</div>


    <!--Panel-->
    <div class="col-sm-5">
        <div class="card">
            <div class="card-header lighten-1">Ringkasan Belanja</div>
            <div class="card-body">
                Jenis Barang :<br>
                <?php
                if ($cart = $this->cart->contents()) {
                    foreach ($cart as $data) {
                        echo $data['name'].',';
                    }
                }
                echo "<hr>Total Harga Barang: &nbsp;&nbsp; Rp.".number_format($grand_total,0,",",".")." ";
                $this->session->set_userdata('total',$grand_total);
                ?>
        </div>
        </div>
    </div>
</div>
<br>
            
