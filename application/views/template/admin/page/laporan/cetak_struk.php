
                    <div id="printArea"><br>
                        <hr style="margin-top: 0; margin-bottom: 0; border: 1px solid #969494;">
                        <b>STRUK PENJUALAN</b><br>
                        <?php echo date('d-M-Y H:m:s'); ?>
                        <hr style="margin-top: 0; margin-bottom: 5; border: 1px solid #969494;">
                        <?php 
                        $total=0;
                        $harga=0; 
                        foreach ($print as $key):?>
                            <?php if ($key->idbel == $row->id_beli) {$total +=$key->total;?>
                            
                                <!-- ID : <?=$key->idbel; ?><br> -->
                                Produk : <?=$key->nama_barang; ?><br>
                                Qty : <?=$key->qty; ?>&nbsp;|&nbsp;
                                Harga : <?=number_format($key->harga,2,',','.'); ?>&nbsp;|&nbsp;
                                Total : <?=number_format($key->total,2,',','.'); ?>&nbsp;
                                <hr style="margin-top: 0; margin-bottom: 10">
                          
                            <?php }?>
                        <?php endforeach;?>
                        Sub Total : <?=number_format($total,2,',','.');?>
                    </div>