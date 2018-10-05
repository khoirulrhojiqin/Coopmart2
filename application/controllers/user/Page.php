<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	public function __construct()
	{	
		parent::__construct();
		$this->load->library('cart');
   		$this->load->library('pagination');
		$this->load->model('user/keranjang_model');
        $this->load->model('user/m_pagination');

		if($this->session->userdata('akses') != 'user'){
	           $url=base_url('login');
	            redirect($url); 
	      	} 

	}
	public function index()
		{	
			$kategori=($this->uri->segment(4))?$this->uri->segment(4):0;
			// $data['produk'] = $this->keranjang_model->get_produk_all();
			$data['kategori'] = $this->keranjang_model->get_kategori_all();
			if ($kategori == 0) {
			$data['id_kategori'] = '';
			}
			else{
				$data['id_kategori'] = $kategori;
			}
			// ######################################################################### //
		//konfigurasi pagination
        $config['base_url'] = site_url('user/page/index'); //site url
        $config['total_rows'] = $this->db->count_all('tabel_barang'); //total row
        $config['per_page'] = 12;  //show record per halaman
        $config["uri_segment"] = 4;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['produk'] = $this->m_pagination->get_databarang($config["per_page"], $data['page']);           
        $data['pagination'] = $this->pagination->create_links();

			$this->load->view('template/user/themes/header',$data);
			$this->load->view('template/user/shopping/list_produk',$data);
			$this->load->view('template/user/themes/footer');
		}
	public function tentang()
		{
			$data['kategori'] = $this->keranjang_model->get_kategori_all();
			$this->load->view('template/user/themes/header',$data);
			$this->load->view('template/user/pages/tentang',$data);
			$this->load->view('template/user/themes/footer');
		}	
	public function cara_bayar()
		{
			$data['kategori'] = $this->keranjang_model->get_kategori_all();
			$this->load->view('template/user/themes/header',$data);
			$this->load->view('template/user/pages/cara_bayar',$data);
			$this->load->view('template/user/themes/footer');
		}		
}
