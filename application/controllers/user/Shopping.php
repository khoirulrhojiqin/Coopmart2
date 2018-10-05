<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Shopping extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		$this->load->library('Cart');
		$this->load->model('user/keranjang_model');
		$this->load->library('session');
   		$this->load->library('pagination');
    	// $this->load->model('user/m_search');
        $this->load->model('user/m_pagination');
    	$this->load->model('user/m_search2');
    	$this->load->model('m_user');
		if($this->session->userdata('akses') != 'user'){
	            $url=base_url('login');
	            redirect($url);
	        }
	}

	public function index()
	{
		$kategori=($this->uri->segment(4))?$this->uri->segment(4):0;
		$data['produk'] = $this->keranjang_model->get_produk_kategori($kategori);
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
        // $data['produk'] = $this->m_pagination->get_databarang($config["per_page"], $data['page']);           
        $data['pagination'] = $this->pagination->create_links();

		$this->load->view('template/user/themes/header',$data);
		$this->load->view('template/user/shopping/list_produk',$data);
		$this->load->view('template/user/themes/footer');

	}
	public function carts()
	{
		$data['kategori'] = $this->keranjang_model->get_kategori_all();
		$this->load->view('template/user/themes/header',$data);
		$this->load->view('template/user/shopping/tampil_cart',$data);
		$this->load->view('template/user/themes/footer');

	}
	
	public function check_out()
	{
		$data['kategori'] = $this->keranjang_model->get_kategori_all();
		$this->load->view('template/user/themes/header',$data);
		$this->load->view('template/user/shopping/check_out',$data);
		$this->load->view('template/user/themes/footer');
		// var_dump($data);
	}
	
	public function detail_produk()
	{
		$id=($this->uri->segment(4))?$this->uri->segment(4):0;
		$data['kategori'] = $this->keranjang_model->get_kategori_all();
		$data['detail'] = $this->keranjang_model->get_produk_id($id)->row_array();
		$this->load->view('template/user/themes/header',$data);
		$this->load->view('template/user/shopping/detail_produk',$data);
		$this->load->view('template/user/themes/footer');
		// var_dump($data);

	}
	function add_to_cart(){ //fungsi Add To Cart
		$id = $this->input->post('id_barang');
		// $qty = $this->input->post('qty');
		$this->session->set_userdata('qty',$this->input->post('qty'));
		$qty = $this->session->userdata('qty');
		
		$cek = $this->db->query("SELECT * FROM tabel_barang where id_barang=$id")->result();
foreach ($this->cart->contents() as $items) {
$total_add =  $qty + $items['qty'];
$this->session->set_userdata('total',$total_add);
}	
		foreach ($cek as $row) {
		if ($row->stok < $this->session->userdata('total')) {
				$this->session->set_flashdata('notifstok1','<script type="text/javascript">
          		toastr.warning("Maaf stok kami tidak cukup. Jumlah stok tersisa '.$row->stok.'")   
            	</script>');
            	echo $this->session->flashdata('notifstok1');
		        echo $this->show_cart();
		}else{

		$data = array(
			'id' => $this->input->post('id_barang'), 
			'name' => $this->input->post('nama_barang'), 
			'price' => $this->input->post('harga_jual'), 
			'gambar' => $this->input->post('gambar'), 
			'qty' => $this->input->post('qty'), 
		);
		$this->cart->insert($data);
		$this->session->set_flashdata('notifbeli','<script type="text/javascript">
          		toastr.success("Telah ditambahkan ke keranjang belanja.")
            	</script>');
		echo $this->session->flashdata('notifbeli');
		echo $this->show_cart(); //tampilkan cart setelah added
	     }
      }
	}
	function load_cart(){ //load data cart
		echo $this->show_cart();
	}
	function show_cart(){ //Fungsi untuk menampilkan Cart
	
		$cart= count($this->cart->contents());	
		$output = $cart;
		
		return $output;		
	}
	function hapus_cart(){ //fungsi untuk menghapus item cart
		$data = array(
			'rowid' => $this->input->post('row_id'), 
			'qty' => 0, 
		);
		$this->cart->update($data);
		echo $this->show_cart();
	}
	function hapus($rowid) 
	{
		if ($rowid=="all")
			{
				$this->cart->destroy();
			}
		else
			{
				$data = array(
							  'rowid' => $rowid,
			  				  'qty'   =>0
			  				);
				$this->cart->update($data);
				$this->session->set_flashdata('notifhapus','<script type="text/javascript">
          		toastr.success("Item telah dihapus")   
            	</script>'); 
			}
		
		redirect('user/shopping/carts');
	}

	function ubah_cart()
	{	
		
		$cart_info = $_POST['cart'] ;
		foreach( $cart_info as $id => $cart)
		{
			$rowid = $cart['rowid'];
			$price = $cart['price'];
			$gambar = $cart['gambar'];
			$amount = $price * $cart['qty'];
			$qty = $cart['qty'];

		$id = $cart['id'];
		$cek = $this->db->query(" SELECT * FROM tabel_barang where id_barang in ($id,$id,$id,$id,$id,$id,$id,$id,$id,$id,$id,$id,$id,$id,$id,$id,$id,$id,$id,$id) ")->result();
	    foreach ($cek as $row) {
		if ($row->stok < $qty) {
			$this->session->set_flashdata('notifstok','<script type="text/javascript">
          		toastr.warning("Maaf stok kami tidak cukup. Jumlah stok tersisa '.$row->stok.'")   
            	</script>');
		}else{
			$data = array(
							'rowid'  => $rowid,
							'price'  => $price,
							'gambar' => $gambar,
							'amount' => $amount,
							'qty' 	 => $qty
						);
			$this->cart->update($data);
			$this->session->set_flashdata('notifubah','<script type="text/javascript">
          		toastr.success("Perubahan Berhasil")   
            	</script>');
			$this->session->flashdata('notifubah');
		} //end if else
	  }//end foreach
	}//end foreach
		redirect('user/shopping/carts');
	}

	public function proses_order()
	{
		
		//-------------------------Input data pelanggan--------------------------
		$data_pelanggan = array(
							'id_user' 		=> $this->input->post('id_user'),
							'nip' 			=> $this->input->post('nip'),
							'nama' 			=> $this->input->post('nama'),
							'email' 		=> $this->input->post('email'),
							'alamat' 		=> $this->input->post('alamat'),
							'jns_transaksi' => $this->input->post('jns_transaksi'),
							'telp'			=> $this->input->post('telp'),
							'created_at' 	=> date('Y-m-d'));
		$id_pelanggan = $this->keranjang_model->tambah_pelanggan($data_pelanggan);
		$this->session->set_userdata('alamat',$data_pelanggan['alamat']);
		$this->session->set_userdata('transaksi',$data_pelanggan['jns_transaksi']);
		// ------------------------Status----------------------------------------
		$status = array(
						'id_beli' => $id_pelanggan,
						'status'  => 'Menunggu',
						'notif'   => '1',
						'tanggal'    => date('Y-m-d')
						);
		$this->keranjang_model->status($status);
		//-------------------------Input data order------------------------------
		$data_order = array('tanggal' 		=> date('Y-m-d'),
					   		'id_pelanggan'  => $id_pelanggan);
		$id_order = $this->keranjang_model->tambah_order($data_order);

		//-------------------------Input data detail order-----------------------	
		$id_user = $this->input->post('id_user');
		$id = array();	
		$qty = array();
		if ($cart = $this->cart->contents())
			{
				foreach ($cart as $item)
					{
						$data_detail = array_merge(array(
										'id_beli' 	=> $id_pelanggan,
										'id_order'  =>$id_order,
										'id_barang' => $item['id'],
										'qty' 		=> $item['qty'],
										'harga' 	=> $item['price'],
										'total'		=> $item['subtotal']));

						$proses = $this->keranjang_model->tambah_detail_order($data_detail);
						$id[] = $item['id'];
						$qty[] = $item['qty'];
						$this->session->set_userdata('order',$data_detail['id_order']);

					}

					
			}
		// ------------------------Input data penjualan -------------------------
		if ($cart = $this->cart->contents()){
			foreach ($cart as $item){
					$data_penjualan = array(
								'id_barang' => $item['id'],
								'jumlah' 	=> $item['qty'],
								'tanggal' 	=> date('Y-m-d'));
					$this->keranjang_model->tambah_penjualan($data_penjualan);
				}
			}
		// ----------------------------Update Barang--------------------------
			for ($i=0; $i < count($id) ; $i++) { 
				$datas = $this->keranjang_model->get_kategori($id[$i]);
				$stock = $datas->stok - $qty[$i];
	            $data = array( 
	                    
	                    'stok' => $stock
	            );
	            $this->keranjang_model->update_barang($id[$i],$data);
			}
			
			
		// -------------------------Hapus shopping cart--------------------------		
		$this->cart->destroy();
		$this->session->unset_userdata('total');
		$data['kategori'] = $this->keranjang_model->get_kategori_all();
		$this->load->view('template/user/themes/header',$data);
		$this->load->view('template/user/shopping/sukses',$data);
		$this->load->view('template/user/themes/footer');
	}
	
public function pencarian($rowno=0){

    // Search text
    $data['kategori'] = $this->keranjang_model->get_kategori_all();
    $search_text = "";
    if($this->input->post('submit') != NULL ){
      $search_text = $this->input->post('search');
      $this->session->set_userdata(array("search"=>$search_text));
    }else{
      if($this->session->userdata('search') != NULL){
        $search_text = $this->session->userdata('search');
      }
    }
    // Row per page
    $rowperpage = 5;
    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }
 
    // All records count
    $allcount = $this->m_search2->getrecordCount($search_text);

    // Get records
    $users_record = $this->m_search2->getData($rowno,$rowperpage,$search_text);
 
    // Pagination Configuration
    $config['base_url'] = base_url().'user/shopping/loadRecord';
    $config['use_page_numbers'] = TRUE;
    $config['total_rows'] = $allcount;
    $config['per_page'] = $rowperpage;

    // Initialize
    $this->pagination->initialize($config);
 
    $data['pagination'] = $this->pagination->create_links();
    $data['result'] = $users_record;
    $data['row'] = $rowno;
    $data['search'] = $search_text;

    // Load view
    $this->load->view('template/user/themes/header',$data);
    $this->load->view('template/user/shopping/isi_pencarian2',$data);
	$this->load->view('template/user/themes/footer');
 
  }
  function ubah_user(){
	$id_user = $this->input->post('id_user');
    $data = array(
        'nip'		=> $this->input->post('nip'),
        'nama'	=> $this->input->post('nama'),
        'telepon'	=> $this->input->post('telepon'),
        'username'	=> $this->input->post('username'),
        'password'	=> md5($this->input->post('password'))
    );
    $this->m_user->ubah_user($data,$id_user);
    $this->session->set_flashdata('notifubah','<script type="text/javascript">
          		toastr.success("Perubahan berhasil.")
            	</script>');

     redirect('user/Shopping/');
	}

}
?>