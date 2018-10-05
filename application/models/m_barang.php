<?php 

class M_barang extends CI_model
{
	function __construct() {
        $this->tableName = 'tabel_barang';
    }

	function get_data()
	{	
		$this->db->order_by('id_barang','DESC');
		return $this->db->get('tabel_barang')->result();
	}
	//  function simpan_barang($id_barang,$nama_barang,$stok,$satuan,$harga_pokok,$harga_jual,$ppn,$diskon){
 //        $hasil=$this->db->query("INSERT INTO tabel_barang (id_barang,nama_barang,stok,satuan,harga_pokok,harga_jual,ppn,diskon) VALUES ('$id_barang','$nama_barang','$stok','$satuan','$harga_pokok','$harga_jual','$ppn','$diskon')");
	// }
	
	// SImpan Barang
	function tambah_barang($data){
			// $this->db->insert($table,$data);
		 $this->db->insert('tabel_barang', $data);
	}
 	 // end  simpan barang
    function hapus($id_barang){
		$where = array('id_barang' => $id_barang);
		$this->m_barang->hapus_data($where,'tabel_barang');
		redirect('Admin/Data_barang');
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	// function ubah($data, $id){
    // $this->db->where('id_barang',$id);
    // $this->db->update('tabel_barang', $data);
 //    return TRUE;
	// }
	public function update($id_barang,$data){
    $this->db->where('id_barang',$id_barang);
    $this->db->update('tabel_barang', $data);
    return TRUE;
 	 }

  function jumlah_barang(){
		return $this->db->query('SELECT * FROM tabel_barang');
		
	}
	function laporan_barang($awal,$akhir){
	$this->session->unset_userdata('tgl_awal');
	$this->session->unset_userdata('tgl_akhir');
	$this->session->unset_userdata('awal');
	$this->session->unset_userdata('akhir');
		$query = $this->db->query("SELECT * FROM tabel_barang where created_at Between '$awal' AND '$akhir' Order by id_barang DESC");
		return $query->result();
	}
}
     