<?php
 
class Login extends CI_Controller{
 
    function __construct(){
        parent::__construct();     
        $this->load->model('m_login');
 
    }
 
    function index(){
        $this->load->view('template/admin/page/Login');
    }

   function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
        $cek_admin=$this->m_login->auth_admin($username,$password);
 
        if($cek_admin->num_rows() > 0){ 
                $data=$cek_admin->row_array();
                $this->session->set_userdata('masuk','admin');
                 if($data['akses']=='admin'){ //Akses admin
                    $this->session->set_userdata('akses','admin');
                    $this->session->set_userdata('ses_id',$data['id_user']);
                    $this->session->set_userdata('ses_name',$data['username']);
                    $this->session->set_userdata('ses_nama',$data['nama']);
                    $this->session->set_userdata('ses_nip',$data['nip']);
                    redirect(base_url('admin'));
 
                 }
                 elseif($data['akses']=='user'){ //akses user
                    $this->session->set_userdata('akses','user');
                    $this->session->set_userdata('ses_id',$data['id_user']);
                    $this->session->set_userdata('ses_name',$data['username']);
                    $this->session->set_userdata('ses_nama',$data['nama']);
                    $this->session->set_userdata('ses_nip',$data['nip']);
                    $this->session->set_userdata('ses_telp',$data['telepon']);
                    redirect(base_url('user/page'));
                 }
                 elseif($data['akses']=='kasir'){ //akses kasir
                    $this->session->set_userdata('akses','kasir');
                    $this->session->set_userdata('ses_id',$data['username']);
                    $this->session->set_userdata('ses_nama',$data['nama']);
                    $this->session->set_userdata('ses_nip',$data['nip']);
                    redirect(base_url('admin'));
                 }
 
        }else{ 
                     // jika username dan password tidak ditemukan atau salah
                            $url=base_url('login');
                            echo $this->session->set_flashdata('msg','<div class="alert alert-danger">'.'<strong>Login gagal! </strong>'.'Username atau password salah'.'</div>');
                            redirect($url);
        }
 
    }

    function logout(){
        $user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $this->session->unset_userdata($key);
            }
        }
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}