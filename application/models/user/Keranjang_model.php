<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Keranjang_model extends CI_Model {

	public function get_produk_all()
	{	
		$this->db->order_by('id_barang', 'DESC');
		$query = $this->db->get('tabel_barang');
		return $query;

	}
	
	public function get_produk_kategori($kategori)
	{	
		$this->db->order_by('id_barang', 'DESC');
		if($kategori>0)
			{
				$this->db->where('kategori',$kategori);
			}
		$query = $this->db->get('tabel_barang');
		return $query;
	}
	
	public function get_kategori_all()
	{	

		$query = $this->db->get('tabel_kategori');
		return $query;
	}
	
	public  function get_produk_id($id)
	{
		$this->db->select('tabel_barang.*,nama_kategori');
		$this->db->from('tabel_barang');
		$this->db->join('tabel_kategori', 'kategori=tabel_kategori.id_kategori','left');
   		$this->db->where('id_barang',$id);
        return $this->db->get();
    }	
	
	public function tambah_pelanggan($data)
	{
		$this->db->insert('tabel_pembeli', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}
	
	public function tambah_order($data)
	{
		$this->db->insert('tabel_order', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}
	
	public function tambah_detail_order($data)
	{
		$this->db->insert('tabel_detail_order', $data);

	}
	public function tambah_penjualan($data)
	{
		$this->db->insert('tabel_penjualan', $data);

	}
	public function update_barang($id,$stock)
	{
		
		$this->db->where('id_barang',$id);
    	$this->db->update('tabel_barang', $stock);

	}
	public function get_kategori($id)
	{
		
		$this->db->where('id_barang',$id);
		$query = $this->db->get('tabel_barang');
		return $query->row();
	}
	function status($status){
		$this->db->insert('tabel_status',$status);
	}

	// public function update_barang($kategori,$data){
 //    $this->db->where('kategori',$kategori);
 //    $this->db->update('tabel_barang', $data);
 //    return TRUE;
 // 	 }
}
?>