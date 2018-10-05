<?php 

class M_order extends CI_model
{
	function __construct() {
        $this->tableName = 'tabel_order';
    }

	function get_data()
	{
		// return $this->db->get('tabel_order')->result();
		$query = $this->db->query("SELECT * FROM tabel_detail_order INNER JOIN tabel_pembeli ON tabel_detail_order.id_beli = tabel_pembeli.id_beli");
		return $query->result();
	}
	
	function hapus_order($id_order){
		$where = array('id_order' => $id_order);
		$this->m_order->hapus_data($where,'tabel_detail_order');
		redirect('Admin/Data_order');
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function ubah_order($data,$id_order){
    $this->db->where('id_order',$id_order);
    $this->db->update('tabel_detail_order', $data);
    return TRUE;
	}
	// function jumlah_kategori(){
	// 	return $this->db->query('SELECT * FROM tabel_kategori');;
		
	// }
}
     