<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends CI_Controller {
	public function __construct()
		{	
			parent::__construct();
			$this->load->library('Pdf');
			$this->load->model('m_beli');
			$this->load->model('m_jual');
			$this->load->model('m_barang');
		}

	public function laporan_order()
	{  
		$awal = $this->session->userdata('awal');
        $akhir = $this->session->userdata('akhir');
		// $data['notif'] = $this->m_barang->notif();
        $data['order'] = $this->m_beli->laporan_order($awal,$akhir);
        $this->load->view('template/admin/page/laporan/cetak_order',$data);
	}
	public function laporan_penjualan()
	{  
		$awal = $this->session->userdata('tgl_awal');
        $akhir = $this->session->userdata('tgl_akhir');
		// $data['notif'] = $this->m_barang->notif();
        $data['jualan'] = $this->m_jual->laporan_jual($awal,$akhir);
        $this->load->view('template/admin/page/laporan/cetak_penjualan',$data);
	}
	public function laporan_barang()
	{  
		$awal = $this->session->userdata('awal_tgl');
        $akhir = $this->session->userdata('akhir_tgl');
		// $data['notif'] = $this->m_barang->notif();
        $data['barang'] = $this->m_barang->laporan_barang($awal,$akhir);
        $this->load->view('template/admin/page/laporan/cetak_barang',$data);
	}
	public function cetak_struk()
	{  

        $this->load->view('template/admin/page/laporan/cetak_struk');
	}
}