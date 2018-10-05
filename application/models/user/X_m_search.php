<?php
class m_search extends CI_Model
{
  public function __construct() {
    parent::__construct(); 
  }
  // Fetch records
  // public function getData($rowno,$rowperpage,$search="") {
 
  //   $this->db->select('*');
  //   $this->db->from('tabel_barang');
  //   if($search != ''){
  //     $this->db->like('nama_barang', $search);
  //     $this->db->or_like('deskripsi', $search);
  //   }
  //   $this->db->limit($rowperpage, $rowno); 
  //   $query = $this->db->get();
 
  //   return $query->result_array();
  // }
  // // Select total records
  // public function getrecordCount($search = '') {
  //   $this->db->select('count(*) as allcount');
  //   $this->db->from('tabel_barang');
 
  //   if($search != ''){
  //     $this->db->like('nama_barang', $search);
  //     $this->db->or_like('deskripsi', $search);
  //   }
  //   $query = $this->db->get();
  //   $result = $query->result_array();
 
  //   return $result[0]['allcount'];
  // }
  //#############################################
  public function get_product_keyword($keyword){
      $this->db->select('*');
      $this->db->from('tabel_barang');
      $this->db->like('nama_barang',$keyword);
      $this->db->or_like('deskripsi',$keyword);
      $this->db->or_like('gambar',$keyword);
      $this->db->or_like('harga_jual',$keyword);
      $this->db->or_like('stok',$keyword);
      return $this->db->get()->result();
    }


  //###########################################################
  // $this->db->select("*");
  // $this->db->from("tabel_barang");
  // if($query != '')
  // {
  //  $this->db->like('nama_barang', $query);
  //  $this->db->or_like('deskripsi', $query);
  //  $this->db->or_like('gambar', $query);
  //  $this->db->or_like('harga_jual', $query);
  //  $this->db->or_like('stok', $query);
  // }
  // $this->db->order_by('id_barang', 'DESC');
  // return $this->db->get();
  
    
 }
?>