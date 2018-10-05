<?php
 
class M_user extends CI_Model{
    function get_data(){     
        return $this->db->get('tabel_user')->result();
    } 
     function simpan_user($nip,$nama,$telepon,$akses,$username,$password){
     	$status = 'Aktif';
        $hasil=$this->db->query("INSERT INTO tabel_user (nip,nama,telepon,status,akses,username,password) VALUES ('$nip','$nama','$telepon','$status','$akses','$username',md5('$password'))");
        return $hasil;
    } 
    function hapus_user($id_user){
		$where = array('id_user' => $id_user);
		$this->m_user->hapus_data($where,'tabel_user');
		redirect('Admin/Data_user');
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function ubah_user($data,$id_user){
    $this->db->where('id_user',$id_user);
    $this->db->update('tabel_user', $data);
    return TRUE;
	}
	function jumlah_user(){
		return $this->db->query('SELECT * FROM tabel_user');
		
	}
    
}