<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginAdministrator extends CI_Controller {

    public function __construct()
    {
        parent::__construct();		
		$this->load->model('Login_model');
    }
    public function index()
    {
        $data['contents']="login";
        $this->load->view('overview_login',$data);
    }

    public function login_action()
    {
        $username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->Login_model->login("admin",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("admin_dinas/index.php/admin/"));
 
		}else{
            $this->session->set_flashdata('error',
            '<div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button> 
                <strong>Warning!</strong> Username atau Password salah
            </div>');
            $this->index();
			
		}
    }

    public function logout()
    {
        $this->session->sess_destroy();
		$this->index();
    }

}