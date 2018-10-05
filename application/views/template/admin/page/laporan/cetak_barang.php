<?php


// create new PDF document
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

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
$title = <<<EOD
<h3> Report Data Barang</h3>
EOD;
$pdf->WriteHTMLCell(0,0,'','',$title,0,1,0,true,'C',true);
$table = '<table style="border:1px solid #c0c0c0; padding:6px;">';
$table .= '<tr style="background-color:#ccc; font-weight:bold;">
				<th style="border:1px solid #c0c0c0;" width="45px">#</th>
				<th style="border:1px solid #c0c0c0;" width="50px">ID</th>
				<th style="border:1px solid #c0c0c0;" width="250px">Nama Barang</th>
				<th style="border:1px solid #c0c0c0;" width="70px">Stok</th>
				<th style="border:1px solid #c0c0c0;" width="120px">Harga</th>
				<th style="border:1px solid #c0c0c0;" width="70px">kategori</th>
		  </tr>';
			$i=1;
			foreach ($barang as $row) 
			{
					
$table.='
			<tr>
				<td style="border:1px solid #c0c0c0;">'.$i++.'</td>
				<td style="border:1px solid #c0c0c0;">'.$row->id_barang.'</td>
				<td style="border:1px solid #c0c0c0;">'.$row->nama_barang.'</td>
				<td style="border:1px solid #c0c0c0;">'.$row->stok.'</td>
				<td style="border:1px solid #c0c0c0;">Rp.'.number_format($row->harga_jual,2,',','.').'</td>
				<td style="border:1px solid #c0c0c0;">'.$row->kategori.'</td>
			</tr>
				';	
			}
$table .= '</table>';
$pdf->WriteHTMLCell(0,0,'','',$table,0,1,0,true,'C',true);
// $pdf


// move pointer to last page
$pdf->lastPage();
// ---------------------------------------------------------

//Close and output PDF document
ob_clean();
$pdf->Output('Laporan_barang.pdf', 'I');
// $this->session->unset_userdata('awal');
// $this->session->unset_userdata('akhir');

//============================================================+
// END OF FILE
//============================================================+
