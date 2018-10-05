<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
// <?php
// defined('BASEPATH') OR exit('No direct script access allowed');

// class Admin  extends MY_Controller {
// 	function __construct(){

// 		parent::__construct();	   
// 	    $this->load->helper('form');
// 		$this->load->helper('url');
// 		$this->load->library('session');
// 		$this->load->library('upload');
// 		$this->load->model('m_barang');
// 		$this->load->model('m_user');
		
// 		// $this->load->helper(array('form', 'url'));
// 		 // if($this->session->userdata('status') != "login"){
//    //          redirect(base_url("login"));
//    //   	   }
// 		if($this->session->userdata('masuk') != TRUE){
//             $url=base_url('login');
//             redirect($url);
//       		  }
// 		}

	
// 	public function index()
// 	{
// 		$this->render_page('template/admin/page/Dashboard');

// 	}
// 	// Data Barang
// 	public function data_barang()
// 	{
// 		// $this->load->model('m_barang');  
//         $data['barang'] = $this->m_barang->get_data();
//         $this->render_page('template/admin/page/Data_barang',$data);
// 	}
	
// 	public function simpan_barang(){
//         // $id_barang=$this->input->post('id_barang');
//         // $nama_barang=$this->input->post('nama_barang');
//         // $stok=$this->input->post('stok');
//         // $satuan=$this->input->post('satuan');
//         // $harga_pokok=$this->input->post('harga_pokok');
//         // $harga_jual=$this->input->post('harga_jual');
//         // $ppn=$this->input->post('ppn');
//         // $diskon=$this->input->post('diskon');
//         // $this->m_barang->simpan_barang($id_barang,$nama_barang,$stok,$satuan,$harga_pokok,$harga_jual,$ppn,$diskon);
//         // $this->session->set_flashdata('notifsimpan','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');        
    
//         // redirect('Admin/Data_barang');

// 			$config = array(
// 			'upload_path' => './assets/upload/files/',
// 			'allowed_types' => 'jpeg|jpg|png',
// 			'file_name' => $_FILES['picture']['name'],
// 			'max_size' => '2048',
// 			'max_width' => '2000',
// 			'max_height' => '2000'
//  		);

// 		$this->load->library('upload', $config);
// 		$this->upload->initialize($config);
// 		if (!$this->upload->do_upload('picture')) {
			
// 			$file = $this->upload->data();
// 			$data = array(
// 					'id_barang' => $this->input->post('id_barang'),
// 		            'nama_barang'    =>$this->input->post('nama_barang'),
// 		            'stok'           =>$this->input->post('stok'),
// 		            'satuan'         =>$this->input->post('satuan'),
// 		            'harga_pokok'    =>$this->input->post('harga_pokok'),
// 		            'harga_jual'     =>$this->input->post('harga_jual'),
// 		            'ppn'            =>$this->input->post('ppn'),
// 		            'diskon'         =>$this->input->post('diskon'),
// 		        );
// 			$this->m_barang->tambah_barang($data);
// 			$this->session->set_flashdata('gambarerror','<div class="alert alert-warning" role="alert"> Gagal Menyimpan Gambar!, ukuran file gambar tidak lebih dari 2MB <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
// 			redirect('Admin/Data_barang');
// 		}else{

// 			$file = $this->upload->data();
// 			$picture = $file['file_name'];
// 			$data = array(
// 					'id_barang' => $this->input->post('id_barang'),
// 		            'nama_barang'    =>$this->input->post('nama_barang'),
// 		            'stok'           =>$this->input->post('stok'),
// 		            'satuan'         =>$this->input->post('satuan'),
// 		            'harga_pokok'    =>$this->input->post('harga_pokok'),
// 		            'harga_jual'     =>$this->input->post('harga_jual'),
// 		            'ppn'            =>$this->input->post('ppn'),
// 		            'diskon'         =>$this->input->post('diskon'),
// 					'gambar' => $picture
// 			);

// 			$this->m_barang->tambah_barang($data);
// 			// var_dump($data);
// 			$this->session->set_flashdata('notifsimpan','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'); 
// 			redirect('Admin/Data_barang');
			
// 		}
// 		// redirect(site_url('uploadimage'));

//     }
//     public function hapus($id_barang){
// 		$where = array('id_barang' => $id_barang);
// 		$this->m_barang->hapus_data($where,'tabel_barang');
// 			$data['id'] = $id_barang;
// 			$data['execute'] = true;		
// 		echo json_encode(array('respon'=>$data));
// 	}

// 	// function edit(){
// 	// $id = $this->input->post('id_barang');
//  //    $data = array(
//  //        'nama_barang'		=> $this->input->post('nama_barang'),
//  //        'stok'	=> $this->input->post('stok'),
//  //        'satuan'	=> $this->input->post('satuan'),
//  //        'harga_pokok'	=> $this->input->post('harga_pokok'),
//  //        'harga_jual'	=> $this->input->post('harga_jual'),
//  //        'ppn'	=> $this->input->post('ppn'),
//  //        'diskon'	=> $this->input->post('diskon')
// 	// 	);
//  //    $this->m_barang->ubah($data,$id);
//  //    $this->session->set_flashdata('notifubah','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
//  //    redirect('Admin/Data_barang');
    
// 	// }
// 	public function ubah($id_barang)
// 	{	
// 		if ($this->input->post('id_barang'))
// 		$where=array('id_barang' => $id_barang );
// 		{
// 		// var_dump($row);
// 		// $row=array('id_barang'=>$id);
// 		// $row = $this->input->post('id_barang');
// 		// $row = $this->m_barang->get_by_id($id_barang);
// 		// 
// 		// Do this if there is an image upload
// 		if ($_FILES AND $_FILES['picture']['name']) {
// 				// Start uploading file
// 				$config = array(
// 						'upload_path' => './assets/upload/files/',
// 						'allowed_types' => 'jpeg|jpg|png',
// 						'file_name' => $_FILES['picture']['name'],
// 						'max_size' => '2048',
// 						'max_width' => '2000',
// 						'max_height' => '2000'
// 				);
// 				// $this->load->library('picture', $config);
// 				$this->load->library('upload', $config);
// 				$this->upload->initialize($config);
// 				if (!$this->upload->do_upload('picture')) {
// 						$this->session->set_flashdata('gambarerror','<div class="alert alert-danger" role="alert"> Gagal Menyimpan Gambar!, ukuran file gambar tidak lebih dari 2MB <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
// 						// redirect(site_url('Admin/edit/' . $row->id));
// 				} else {

// 						// Remove old image in folder 'images' using unlink()
// 						// unlink() use for delete files like image
					
// 							@unlink(realpath('assets/upload/files').$where->gambar);
							
// 						// Upload file
// 						$file = $this->upload->data();
// 						$picture = $file['file_name'];
// 						$id_barang = $this->input->post('id_barang');
// 						$data = array(
// 								'nama_barang'    =>$this->input->post('nama_barang'),
// 					            'stok'           =>$this->input->post('stok'),
// 					            'satuan'         =>$this->input->post('satuan'),
// 					            'harga_pokok'    =>$this->input->post('harga_pokok'),
// 					            'harga_jual'     =>$this->input->post('harga_jual'),
// 					            'ppn'            =>$this->input->post('ppn'),
// 					            'diskon'         =>$this->input->post('diskon'),
// 					            'diskon'         =>$this->input->post('diskon'),
// 								'gambar'         => $picture
// 								// 'filefoto' => $file['file_name'],
// 						);

// 						$this->m_barang->update($id_barang,$data);
// 						var_dump($data);
// 				}
// 		}
// 		// Do this if there's no image file uploaded
// 		else {
// 				// No file upload
// 				$id_barang = $this->input->post('id_barang');
// 				$data = array(
// 						'nama_barang'    =>$this->input->post('nama_barang'),
// 					    'stok'           =>$this->input->post('stok'),
// 					    'satuan'         =>$this->input->post('satuan'),
// 					    'harga_pokok'    =>$this->input->post('harga_pokok'),
// 					    'harga_jual'     =>$this->input->post('harga_jual'),
// 					    'ppn'            =>$this->input->post('ppn'),
// 					    'diskon'         =>$this->input->post('diskon')
// 				);
// 				$this->m_barang->update($id_barang,$data);
// 				var_dump($data);
// 		}
// 		$this->session->set_flashdata('notifubah','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
//        redirect('Admin/Data_barang');
// }
		
// 	}
//     // End Data Barang

//     // Data User
// 	public function data_user()
// 	{
// 		$this->load->model('m_user');  
//         $data['user'] = $this->m_user->get_data();
//         $this->render_page('template/admin/page/Data_user',$data);
// 	}
// 	public function simpan_user(){
// 		// $this->load->model('m_barang');
//         $id_user=$this->input->post('id_user');
//         $nip=$this->input->post('nip');
//         $nama=$this->input->post('nama');
//         $telepon=$this->input->post('telepon');
//         $status=$this->input->post('status');
//         $akses=$this->input->post('akses');
//         $this->m_user->simpan_user($id_user,$nip,$nama,$telepon,$status,$akses);
//         $this->session->set_flashdata('notifsimpan','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
//         redirect('Admin/Data_user');
//     }
//     public function hapus_user($id_user){
// 		$where = array('id_user' => $id_user);
// 		$this->m_user->hapus_data($where,'tabel_user');
// 			$data['id'] = $id_user;
// 			$data['execute'] = true;		
// 		echo json_encode(array('respon'=>$data));
// 		$this->session->set_flashdata('notifhapus','<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
// 	}

// 	function ubah_user(){
// 	$id_user = $this->input->post('id_user');
//     $data = array(
//         'nip'		=> $this->input->post('nip'),
//         'nama'	=> $this->input->post('nama'),
//         'telepon'	=> $this->input->post('telepon'),
//         'status'	=> $this->input->post('status'),
//         'akses'	=> $this->input->post('akses')
//     );
//     $this->m_user->ubah_user($data,$id_user);
//     $this->session->set_flashdata('notifubah','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
//     redirect('Admin/Data_user');
// 	}
// 	 public function user(){
//         $this->load->view('template/user/user');
//     }
//     // End Data User

// 	// public function profil()
// 	// {
// 	// 	$this->render_page('template/admin/page/Profil');
// 	// }
// 	// public function icon()
// 	// {
// 	// 	$this->render_page('template/admin/page/Icon');
// 	// }
// 	// public function map()
// 	// {
// 	// 	$this->render_page('template/admin/page/Map');
// 	// }
// 	// public function blank()
// 	// {
// 	// 	$this->render_page('template/admin/page/Blank');
// 	// }


// }
