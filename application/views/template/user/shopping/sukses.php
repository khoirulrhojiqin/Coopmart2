
<br>
<div class="container">
<h2><center><strong>Proses Order sukses</strong></center></h2>
</div><hr>
<div class="kotak2">
<p>Terima kasih sudah berbelanja di toko CoopMart.Id Order anda sudah masuk ke database kami, dan barang akan sampai di tempat anda.<br>
Jangan segan mengontak kami jika ada permasalahan!</p>
<p>Anda dapat mencetak invoice dibawah sebagai bukti transaksi.</p>
</div>


    <!--Panel-->
    <div class="col-sm-8">
        <div class="card">
            <div class="card-header">Invoice</div>
           		<a class="nav-link waves-effect" id="print_button" style="margin-left: 80%; margin-bottom: -50px;">
	              <i class="fa fa-print"></i>
	              <span class="clearfix d-none d-sm-inline-block"> Cetak </span>
	            </a>
            <div class="card-body PrintArea">
            	<img src="<?php echo base_url("assets/images/coopmart.png");?>" width="60px"><hr>
            	<h5><strong>Invoice</strong></h5>
            	<table width="70%">
                <tr>
                  <td style="font-weight: bold;" width="90px">No Order</td>
                  <td><?php echo $this->session->userdata('order'); ?></td>
                  <td style="font-weight: bold;" width="90px">Pembayaran</td>
                  <td><?php echo $this->session->userdata('transaksi'); ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold;" width="90px">Tanggal</td>
                    <td><?php echo date("d F Y"); ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold;" width="90px">Member</td>
                    <td><?php echo $this->session->userdata('ses_nama'); ?></td>
                </tr>
              </table><br>
              <table width="100%">
              	<tr bgcolor="#F8F8F8">
              		<td style="font-weight: bold;">Nama Barang</td>
              		<td style="font-weight: bold;">harga</td>
              		<td style="font-weight: bold;">Qty</td>
              		<td style="font-weight: bold;">Total</td>
              	</tr>
              	<?php 
              	$total=0;
              	$id_beli = $this->session->userdata('order');
              	$data = $this->db->query("SELECT * from tabel_detail_order inner join tabel_barang on tabel_detail_order.id_barang=tabel_barang.id_barang where id_beli='$id_beli'")->result();
              	?>
              	<?php foreach ($data as $isi) {$total +=$isi->total;?>
              	<tr>
              		<td><?php echo $isi->nama_barang;?></td>
              		<td><?php echo $isi->harga;?></td>
              		<td><?php echo $isi->qty;?></td>
              		<td><?php echo $isi->total;?></td>
              	</tr>
              <?php } ?>
              <tr bgcolor="silver">
              	<td style="font-weight: bold;">Sub Total</td>
              	<td></td>
              	<td></td>
              	<td style="font-weight: bold;"><?=number_format($total,2,',','.');?></td>
              </tr>
              </table>
        </div>
        </div>
    </div>
    <br>
  <script>
    $("#print_button").click(function(){
    	$("div.PrintArea").printArea();
    });
  </script>