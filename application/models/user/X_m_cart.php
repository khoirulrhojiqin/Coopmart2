<?php
class m_cart extends CI_Model{

	function get_all_produk(){
		$hasil=$this->db->get('tabel_barang');
		return $hasil->result();
	}
	
}