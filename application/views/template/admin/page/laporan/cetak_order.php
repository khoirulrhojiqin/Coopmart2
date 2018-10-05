<?php


// create new PDF document
$pdf = new TCPDF('L', 'mm', 'A4', true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Hoirul Rhojiqin');
$pdf->SetTitle('Report Order Coop Mart');
$pdf->SetSubject('TARAWEANG');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.'', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$pdf->setFooterData(array(255,64,0), array(0,64,128));
// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(15);
$pdf->SetFooterMargin(25);
$pdf->SetTopMargin(35);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', '', 10);

// add a page
$pdf->AddPage();

// set cell padding
$pdf->setCellPaddings(1, 1, 1, 1);

// set cell margins
$pdf->setCellMargins(1, 1, 1, 1);

// set color for background
$pdf->SetFillColor(255, 255, 127);

// MultiCell($w, $h, $txt, $border=0, $align='J', $fill=0, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0)
$total=0;
$harga=0;
foreach ($order as $row) {
$harga +=$row->harga;
$total +=$row->total;
}
$a_date = date('t-m-Y');


$title = <<<EOD
<h3> SURAT PENGAKUAN HUTANG</h3>
EOD;
$title2 = '<p>
Yang bertandatangan menyatakan bahwa ini adalah Pemilik toko OMI COOP MART<br>
Dengan ini menyatakan bahwa pada tanggal '.date('d-m-Y').' telah menerima dagangan Toko Indogrosir senilai Rp.
'.number_format($total,2,',','.').' yang akan dilunasi pada tanggal jatuh tempo pembayaran, yaitu tanggal '.date("t-m-Y", strtotime($a_date)).'.<br>
Penerimaan barang dagangan ini kami rangkum sesuai BERITA ACARA<br>
terlampir, yaitu sebagai berikut
</p>';
$title3 = '
			<hr>
			---------------------------------------------------------- Berita Acara ---------------------------------------------------------- Rujukan Struk Penjualan ----------------------------------------------------------
			<hr>';
$pdf->WriteHTMLCell(0,0,'','',$title,0,1,0,true,'C',true);
$pdf->WriteHTMLCell(0,0,'','',$title2,0,1,0,true,'L',true);
$pdf->WriteHTMLCell(0,0,'','',$title3,0,1,0,true,'L',true);
$table = '<table style="border:1px solid #c0c0c0; padding:6px;">';
$table .= '<tr style="background-color:#ccc; font-weight:bold;">
				<th style="border:1px solid #c0c0c0;" width="35px">#</th>
				<th style="border:1px solid #c0c0c0;" width="35px">ID</th>
				<th style="border:1px solid #c0c0c0;" width="118px">Kode Member</th>
				<th style="border:1px solid #c0c0c0;" width="160px">Nama</th>
				<th style="border:1px solid #c0c0c0;" width="95px">Pembayaran</th>
				<th style="border:1px solid #c0c0c0;" width="50px">Count</th>
				<th style="border:1px solid #c0c0c0;" width="150px">Nilai Total Item</th>
				<th style="border:1px solid #c0c0c0;" width="150px">Total</th>
				<th style="border:1px solid #c0c0c0;" width="150px">Tanggal</th>
		  </tr>';
			$i=1;
			foreach ($order as $row) 
			{
					
$table.='
			<tr>
				<td style="border:1px solid #c0c0c0;">'.$i++.'</td>
				<td style="border:1px solid #c0c0c0;">'.$row->id_user.'</td>
				<td style="border:1px solid #c0c0c0;">'.$row->nip.'</td>
				<td style="border:1px solid #c0c0c0;">'.$row->nama.'</td>
				<td style="border:1px solid #c0c0c0;">'.$row->jns_transaksi.'</td>
				<td style="border:1px solid #c0c0c0;">'.$row->total_belanja.'</td>
				<td style="border:1px solid #c0c0c0;">'.number_format($row->harga,2,',','.').'</td>
				<td style="border:1px solid #c0c0c0;">'.number_format($row->total,2,',','.').'</td>
				<td style="border:1px solid #c0c0c0;">'.date("Y-m-d H:m:s").'</td>
			</tr>
				';	
			}
$table.='<tr>
			<td colspan="6">Sub Total</td>
			<td>'.number_format($harga,2,',','.').'</td>
			<td>'.number_format($total,2,',','.').'</td>
		 </tr>';
$table .= '</table>';
$pdf->WriteHTMLCell(0,0,'','',$table,0,1,0,true,'C',true);
// $pdf
$foter = '*) Tanda Cetak Berita Acara';
$foter2 = '
			Gowa, '.date('d M Y').'<br><br> 
			tanda tangan<br>
			nama jelas pemilik toko<br><br><br><br>
			(OMI COOP MART)
			';
$pdf->WriteHTMLCell(0,0,'','',$foter,0,1,0,true,'L',true);
$pdf->WriteHTMLCell(0,0,'','',$foter2,0,1,0,true,'L',true);
// move pointer to last page
$pdf->lastPage();
// ---------------------------------------------------------

//Close and output PDF document
ob_clean();
$pdf->Output('Laporan_order.pdf', 'I');
// $this->session->unset_userdata('awal');
// $this->session->unset_userdata('akhir');

//============================================================+
// END OF FILE
//============================================================+
