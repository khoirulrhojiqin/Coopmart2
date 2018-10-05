<?php
 
class M_jual extends CI_Model
	{
    function get_jual(){
        $query = $this->db->query("SELECT * FROM tabel_penjualan INNER JOIN tabel_barang ON tabel_penjualan.id_barang = tabel_barang.id_barang ORDER BY id_jual DESC");
        return $query->result();
    } 
     function simpan_jual($id_jual,$id_barang,$jumlah,$harga,$total,$tanggal){
        $hasil=$this->db->query("INSERT INTO tabel_penjualan (id_jual,id_barang,jumlah,harga,total,tanggal) VALUES ('$id_jual','$id_barang','$jumlah','$harga','$total','$tanggal')");
        return $hasil;
    } 
    function hapus_jual($id_jual){
		$where = array('id_jual' => $id_jual);
		$this->m_jual->hapus_data($where,'tabel_penjualan');
		redirect('Admin/Data_jual');
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function ubah_jual($data,$id_jual){
    $this->db->where('id_jual',$id_jual);
    $this->db->update('tabel_penjualan', $data);
    return TRUE;
	}
	function jumlah_jual(){
		return $this->db->query('SELECT * FROM tabel_penjualan');;
		
	}
   function laporan_jual($awal,$akhir){
	$this->session->unset_userdata('awal');
	$this->session->unset_userdata('akhir');	
	$query = $this->db->query("SELECT * FROM tabel_penjualan INNER JOIN tabel_barang ON tabel_penjualan.id_barang = tabel_barang.id_barang where tabel_penjualan.tanggal Between '$awal' AND '$akhir' Order by tabel_penjualan.id_jual DESC");
        return $query->result();
	}
    
}