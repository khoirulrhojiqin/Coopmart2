<?php 

class M_kategori extends CI_model
{
	function __construct() {
        $this->tableName = 'tabel_kategori';
    }

	function get_data()
	{
		return $this->db->get('tabel_kategori')->result();
	}
	function tambah_kategori($data){
			// $this->db->insert($table,$data);
		 $this->db->insert('tabel_kategori', $data);
	}
	function hapus_kategori($id_kategori){
		$where = array('id_beli' => $id_beli);
		$this->m_beli->hapus_data($where,'tabel_kategori');
		redirect('Admin/Data_kategori');
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function ubah_kategori($data,$id_kategori){
    $this->db->where('id_kategori',$id_kategori);
    $this->db->update('tabel_kategori', $data);
    return TRUE;
	}
	// function jumlah_kategori(){
	// 	return $this->db->query('SELECT * FROM tabel_kategori');;
		
	// }
}
     