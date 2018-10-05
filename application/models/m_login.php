<?php
 
// class M_login extends CI_Model{
//     function cek_login($table,$where){     
//         return $this->db->get_where($table,$where);
//     }
// } 
class M_login extends CI_Model{
    //cek nip dan password dosen
    function auth_admin($username,$password){
        $query=$this->db->query("SELECT * FROM tabel_user WHERE username='$username' AND password=MD5('$password') LIMIT 1");
        return $query;
    }
 
    // //cek nim dan password mahasiswa
    // function auth_user($username,$password){
    //     $query=$this->db->query("SELECT * FROM tabel_user WHERE username='$username' AND password=MD5('$password') LIMIT 1");
    //     return $query;
    // }
 
}