<?php
class m_search2 extends CI_Model
{
  public function __construct() {
    parent::__construct(); 
  }
  // Fetch records
  public function getData($rowno,$rowperpage,$search="") {
    $this->db->order_by('id_barang', 'DESC');
    $this->db->select('*');
    $this->db->from('tabel_barang');
    if($search != ''){
      $this->db->like('nama_barang', $search);
      $this->db->or_like('deskripsi', $search);
    }
    $this->db->limit($rowperpage, $rowno); 
    $query = $this->db->get();
 
    return $query;
  }
  // Select total records
  public function getrecordCount($search = '') {
    $this->db->select('count(*) as allcount');
    $this->db->from('tabel_barang');
 
    if($search != ''){
      $this->db->like('nama_barang', $search);
      $this->db->or_like('deskripsi', $search);
    }
    $query = $this->db->get();
    $result = $query->result_array();
 
    return $result[0]['allcount'];
  }
  
    
 }
?>