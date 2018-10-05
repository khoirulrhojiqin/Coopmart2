<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin  extends MY_Controller {
		function __construct(){

			parent::__construct();	   
		    $this->load->helper('form');
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->library('upload');
			$this->load->library('Pdf');
			$this->load->model('m_barang');
			$this->load->model('m_user');
			$this->load->model('m_jual');		
			$this->load->model('m_beli');
			$this->load->model('m_kategori');		
			$this->load->model('m_order');		
			$this->load->model('m_grafik');		
			// #18b7b0

			if($this->session->userdata('akses') == 'admin'){
	            
	      	} 
	      	elseif ($this->session->userdata('akses') == 'kasir') {
	      		
	      	}else{
	      		$url=base_url('login');
	            redirect($url);
	      	}
	      	
		}

	public function index()
	{	
		$data['notif'] = $this->m_beli->notif();
		$data['notif2'] = $this->m_beli->notif2();
		$data['user'] = $this->m_user->jumlah_user();
		$data['barang'] = $this->m_barang->jumlah_barang();
		$data['jual'] = $this->m_jual->jumlah_jual();
		$data['beli'] = $this->m_beli->jumlah_beli();
   // Highchart
   foreach($this->m_grafik->statistik()->result_array() as $row)
   {
    $data['grafik'][]=(float)$row['Januari'];
    $data['grafik'][]=(float)$row['Februari'];
    $data['grafik'][]=(float)$row['Maret'];
    $data['grafik'][]=(float)$row['April'];
    $data['grafik'][]=(float)$row['Mei'];
    $data['grafik'][]=(float)$row['Juni'];
    $data['grafik'][]=(float)$row['Juli'];
    $data['grafik'][]=(float)$row['Agustus'];
    $data['grafik'][]=(float)$row['September'];
    $data['grafik'][]=(float)$row['Oktober'];
    $data['grafik'][]=(float)$row['November'];
    $data['grafik'][]=(float)$row['Desember'];
   }
		$this->render_page('template/admin/page/Dashboard',$data);

	}
	// Data Barang
	public function data_barang()
	{
		$data['notif'] = $this->m_beli->notif();
		$data['notif2'] = $this->m_beli->notif2();
        $data['barang'] = $this->m_barang->get_data();
        $data['kategori'] = $this->m_kategori->get_data();
        $this->render_page('template/admin/page/Data_barang',$data);
	}
	
	public function simpan_barang(){
			$config = array(
			'upload_path' => './assets/upload/files/',
			'allowed_types' => 'jpeg|jpg|png',
			'file_name' => $_FILES['picture']['name'],
			'max_size' => '5048',
			'max_width' => '4160',
			'max_height' => '3120',
			'encrypt_name' => TRUE
 		);
		$tanggal = date("Y-m-d");
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('picture')) {
			
			$file = $this->upload->data();
			$data = array(
					'id_barang' => $this->input->post('id_barang'),
		            'nama_barang'    =>$this->input->post('nama_barang'),
		            'stok'           =>$this->input->post('stok'),
		            'harga_jual'     =>$this->input->post('harga_jual'),
		            'deskripsi'      =>$this->input->post('deskripsi'),
		            'kategori'       =>$this->input->post('kategori'),
		            'created_at'     =>$tanggal,
		        );
			$this->m_barang->tambah_barang($data);
			$this->session->set_flashdata('gambarerror','<div class="alert alert-danger" role="alert"> Gagal Menyimpan Gambar!, ukuran file gambar tidak lebih dari 2MB <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('Admin/Data_barang');
		}else{

			$file = $this->upload->data();
			$picture = $file['file_name'];
			$data = array(
					'id_barang' => $this->input->post('id_barang'),
		            'nama_barang'    =>$this->input->post('nama_barang'),
		            'stok'           =>$this->input->post('stok'),
		            'harga_jual'     =>$this->input->post('harga_jual'),
					'gambar' => $picture,
					'deskripsi'     =>$this->input->post('deskripsi'),
					'kategori'     =>$this->input->post('kategori'),
					'created_at'     =>$tanggal,
			);

			$this->m_barang->tambah_barang($data);
			$this->session->set_flashdata('notifsimpan','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'); 
			redirect('Admin/Data_barang');
			
		}
		// redirect(site_url('uploadimage'));

    }
    public function hapus($id_barang){
		$where = array('id_barang' => $id_barang);
		$this->m_barang->hapus_data($where,'tabel_barang');
			$data['id'] = $id_barang;
			$data['execute'] = true;		
		echo json_encode(array('respon'=>$data));
	}

	public function ubah($id_barang)
	{	
		// $row = $this->m_barang->get_by_id($id_barang);
		if ($this->input->post('id_barang'))
		$where=array('id_barang' => $id_barang );
		{
		// Do this if there is an image upload
		if ($_FILES AND $_FILES['picture']['name']) {
				// Start uploading file
				$config = array(
						'upload_path' => './assets/upload/files/',
						'allowed_types' => 'jpeg|jpg|png',
						'file_name' => $_FILES['picture']['name'],
						'max_size' => '5048',
						'max_width' => '4160',
						'max_height' => '3120',
						'encrypt_name' => TRUE
				);

				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('picture')) {
						$this->session->set_flashdata('gambarerror','<div class="alert alert-danger" role="alert"> Gagal Menyimpan Gambar!, ukuran file gambar tidak lebih dari 2MB <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
						redirect('Admin/Data_barang');
				} else {

						
						unlink('assets/upload/files/'.$this->input->post('gambar'));
							
						// Upload file
						$file = $this->upload->data();
						$picture = $file['file_name'];
						$id_barang = $this->input->post('id_barang');

						$data = array(
								'nama_barang'    =>$this->input->post('nama_barang'),
					            'stok'           =>$this->input->post('stok'),
					            'harga_jual'     =>$this->input->post('harga_jual'),
								'gambar'         => $picture,
					            'deskripsi'       =>$this->input->post('deskripsi'),
					            'kategori'       =>$this->input->post('kategori'),

								);

						$this->m_barang->update($id_barang,$data);
						var_dump($data);

						$this->session->set_flashdata('notifubah','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
      					    redirect('Admin/Data_barang');
				}
		}
		// Do this if there's no image file uploaded
		else {
				// No file upload
				$id_barang = $this->input->post('id_barang');
				$data = array(
						'nama_barang'    =>$this->input->post('nama_barang'),
					    'stok'           =>$this->input->post('stok'),
					    'harga_jual'     =>$this->input->post('harga_jual'),
					    'deskripsi'       =>$this->input->post('deskripsi'),
					    'kategori'       =>$this->input->post('kategori'),

				);
				$this->m_barang->update($id_barang,$data);
				var_dump($data);

				$this->session->set_flashdata('notifubah','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
       				redirect('Admin/Data_barang');
		      }
	     }
		
	}
    // End Data Barang

    // Data User
	public function data_user()
	{
		// $this->load->model('m_user'); 
		$data['notif'] = $this->m_beli->notif();
		$data['notif2'] = $this->m_beli->notif2(); 
        $data['user'] = $this->m_user->get_data();
        $this->render_page('template/admin/page/Data_user',$data);
	}
	public function simpan_user(){
		// $this->load->model('m_barang');
        // $id_user=$this->input->post('id_user');
        $nip=$this->input->post('nip');
        $nama=$this->input->post('nama');
        $telepon=$this->input->post('telepon');
        // $status=$this->input->post('status');
        $akses=$this->input->post('akses');
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $this->m_user->simpan_user($nip,$nama,$telepon,$akses,$username,$password);
        $this->session->set_flashdata('notifsimpan','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('Admin/Data_user');
    }
    public function hapus_user($id_user){
		$where = array('id_user' => $id_user);
		$this->m_user->hapus_data($where,'tabel_user');
			$data['id'] = $id_user;
			$data['execute'] = true;		
		echo json_encode(array('respon'=>$data));
		$this->session->set_flashdata('notifhapus','<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	}

	function ubah_user(){
	$id_user = $this->input->post('id_user');
    $data = array(
        'nip'		=> $this->input->post('nip'),
        'nama'	=> $this->input->post('nama'),
        'telepon'	=> $this->input->post('telepon'),
        'status'	=> $this->input->post('status'),
        'akses'	=> $this->input->post('akses'),
        'username'	=> $this->input->post('username'),
        'password'	=> md5($this->input->post('password'))
    );
    $this->m_user->ubah_user($data,$id_user);
    $this->session->set_flashdata('notifubah','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    redirect('Admin/Data_user');
	}
	// END Data User

	 // Data Penjualan
    public function data_jual()
	{  
		$data['notif'] = $this->m_beli->notif();
		$data['notif2'] = $this->m_beli->notif2();
        $data['jual'] = $this->m_jual->get_jual();
        $this->render_page('template/admin/page/Data_penjualan',$data);
	}
	public function simpan_jual(){
		// $this->load->model('m_barang');
        $id_jual=$this->input->post('id_jual');
        $id_barang=$this->input->post('id_barang');
        $jumlah=$this->input->post('jumlah');
        $harga=$this->input->post('harga');
        $total=$this->input->post('total');
        $tanggal=$this->input->post('tanggal');
        
        $this->m_jual->simpan_jual($id_jual,$id_barang,$jumlah,$harga,$total,$tanggal);
        $this->session->set_flashdata('notifsimpan','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('Admin/Data_jual');
    }
    public function hapus_jual($id_jual){
		$where = array('id_jual' => $id_jual);
		$this->m_user->hapus_data($where,'tabel_penjualan');
			$data['id'] = $id_jual;
			$data['execute'] = true;		
		echo json_encode(array('respon'=>$data));
		$this->session->set_flashdata('notifhapus','<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	}

	function ubah_jual(){
	$id_jual = $this->input->post('id_jual');
    $data = array(
        'id_barang'		=> $this->input->post('id_barang'),
        'jumlah'	=> $this->input->post('jumlah'),
        'harga'	=> $this->input->post('harga'),
        'total'	=> $this->input->post('total'),
        'tanggal'	=> $this->input->post('tanggal')
    );
    $this->m_jual->ubah_jual($data,$id_jual);
    $this->session->set_flashdata('notifubah','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    redirect('Admin/data_jual');
	}
	// End Data Penjualan
	// Data Pembelian
	public function data_beli()
	{  
		$data['notif'] = $this->m_beli->notif();
		$data['notif2'] = $this->m_beli->notif2();
        $data['beli'] = $this->m_beli->get_data();
        $data['print'] = $this->m_beli->print();

        $this->render_page('template/admin/page/Data_pembeli',$data);
	}
	
	public function data_belis($id){
		$model = $this->m_beli->print2($id)->row();
		$data['print2']['id_beli'] = $model->id_beli;
		// $data['print2']['id_user'] = $model->id_user;
		// $data['print2']['nama_barang'] = $model->nama_barang;
		// $data['print2']['harga'] = $model->harga;
		// $data['print2']['qty'] = $model->qty;
		// $data['print2']['tgl'] = date('d F Y');
		// $data['print2']['jam'] = date('H:i:s A');
		// $data['print2']['total'] =  $model->total;
		// $data['print2']['subtotal'] =  $model->total;
		if (is_null($data['print2'])) {
			$data['execute'] = false;
		}
		else{
		$data['execute'] = true;					
		}
		echo json_encode(array('respon'=>$data));
	}
	public function simpan_beli(){
		// $this->load->model('m_barang');
        $id_beli=$this->input->post('id_beli');
        $nip=$this->input->post('nip');
        $nama=$this->input->post('nama');
        $email=$this->input->post('email');
        $alamat=$this->input->post('alamat');
        $telp=$this->input->post('telp');
        $jns_transaksi=$this->input->post('jns_transaksi');
        
        $this->m_beli->simpan_beli($id_beli,$nip,$nama,$email,$alamat,$telp,$jns_transaksi);
        $this->session->set_flashdata('notifsimpan','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('Admin/Data_jual');
    }
    public function hapus_beli($id){
		$where = array('id' => $id);
		$this->m_beli->hapus_data($where,'tabel_detail_order');
			$data['id'] = $id;
			$data['execute'] = true;		
		echo json_encode(array('respon'=>$data));
		$this->session->set_flashdata('notifhapus','<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	}

	function ubah_beli(){
	$id_beli = $this->input->post('id_beli');
    $data = array(
        'nip'			=> $this->input->post('nip'),
        'nama'			=> $this->input->post('nama'),
        'email'			=> $this->input->post('email'),
        'alamat'		=> $this->input->post('alamat'),
        'telp'			=> $this->input->post('telp'),
        'jns_transaksi'	=> $this->input->post('jns_transaksi')
    );
    $this->m_beli->ubah_beli($data,$id_beli);
    $this->session->set_flashdata('notifubah','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    redirect('Admin/data_beli');
	}
	function terima_beli(){
		$id_status = $this->input->post('id_status');
		$status = $this->input->post('status');
	$this->m_beli->terima_beli($id_status,$status);
    $this->session->set_flashdata('notifubah','<div class="alert alert-success" role="alert"> Pesanan telah dikonfirmasi <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    redirect('Admin/data_beli');
	}
	// End Data Pembelian
	// Data Kategori
public function data_kategori()
	{  
		$data['notif'] = $this->m_beli->notif();
		$data['notif2'] = $this->m_beli->notif2();
        $data['kategori'] = $this->m_kategori->get_data();
        $this->render_page('template/admin/page/Data_kategori',$data);
	}
	public function simpan_kategori(){
		// $this->load->model('m_barang');
		$data = array(
	        'id_kategori'  =>$this->input->post('id_kategori'),
	        'nama_kategori'=>$this->input->post('nama_kategori'),
        );
        $this->m_kategori->tambah_kategori($data);
        $this->session->set_flashdata('notifsimpan','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('Admin/Data_kategori');
    }
    public function hapus_kategori($id_kategori){
		$where = array('id_kategori' => $id_kategori);
		$this->m_kategori->hapus_data($where,'tabel_kategori');
			$data['id'] = $id_kategori;
			$data['execute'] = true;		
		echo json_encode(array('respon'=>$data));
		$this->session->set_flashdata('notifhapus','<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	}

	function ubah_kategori(){
	$id_kategori = $this->input->post('id_kategori');
    $data = array(
        'nama_kategori'			=> $this->input->post('nama_kategori'),
    );
    $this->m_kategori->ubah_kategori($data,$id_kategori);
    $this->session->set_flashdata('notifubah','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    redirect('Admin/data_kategori');
	}
	// END Data Kategori
// Data oreder
public function data_order()
	{  
		$data['notif'] = $this->m_beli->notif();
		$data['notif2'] = $this->m_beli->notif2();
        $data['order'] = $this->m_order->get_data();
        $this->render_page('template/admin/page/Data_order',$data);
	}
public function hapus_order($id_order){
		$where = array('id_order' => $id_order);
		$this->m_order->hapus_data($where,'tabel_detail_order');
			$data['id'] = $id_order;
			$data['execute'] = true;		
		echo json_encode(array('respon'=>$data));
		$this->session->set_flashdata('notifhapus','<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	}
function ubah_order(){
	$id_order = $this->input->post('id_order');
    $data = array(
        'id_user'			=> $this->input->post('id_user'),
        'id_barang'			=> $this->input->post('id_barang'),
        'harga'				=> $this->input->post('harga'),
        'qty'				=> $this->input->post('qty'),
        'total'				=> $this->input->post('total'),
    );
    $this->m_order->ubah_order($data,$id_order);
    $this->session->set_flashdata('notifubah','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    redirect('Admin/data_order');
	}
	 
    // End Data User

   //Laporan Laporan Laporan 
	public function laporan_penjualan()
	{  
		$this->session->set_userdata('tgl_awal',$this->input->post('awal'));
		$this->session->set_userdata('tgl_akhir',$this->input->post('akhir'));
		$awal = $this->input->post('awal');
        $akhir = $this->input->post('akhir');
		$data['notif'] = $this->m_beli->notif();
		$data['notif2'] = $this->m_beli->notif2();
        $data['jualan'] = $this->m_jual->laporan_jual($awal,$akhir);
        $this->render_page('template/admin/page/laporan_penjualan',$data);
	}
	public function laporan_order()
	{  	
		$this->session->set_userdata('awal',$this->input->post('awal'));
		$this->session->set_userdata('akhir',$this->input->post('akhir'));
		$awal = $this->input->post('awal');
        $akhir = $this->input->post('akhir');
		$data['notif'] = $this->m_beli->notif();
		$data['notif2'] = $this->m_beli->notif2();
        $data['order'] = $this->m_beli->laporan_order($awal,$akhir);
        $this->render_page('template/admin/page/laporan_order',$data);
	}
	public function laporan_barang()
	{  
		$this->session->set_userdata('awal_tgl',$this->input->post('awal'));
		$this->session->set_userdata('akhir_tgl',$this->input->post('akhir'));
		$awal = $this->input->post('awal');
        $akhir = $this->input->post('akhir');
		$data['notif'] = $this->m_beli->notif();
		$data['notif2'] = $this->m_beli->notif2();
        $data['barang'] = $this->m_barang->laporan_barang($awal,$akhir);
        $this->render_page('template/admin/page/laporan_barang',$data);
	}
	function status_ubah(){
    $this->m_beli->status_ubah();
    redirect('Admin/Data_beli');
	}

}
