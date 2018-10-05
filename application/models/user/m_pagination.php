<?php
class M_pagination extends CI_Model{
    
    //ambil data mahasiswa dari database
    function get_databarang($limit, $start){
		$this->db->order_by('id_barang','DESC');
        $query = $this->db->get('tabel_barang', $limit, $start);
        return $query;
    }
} 