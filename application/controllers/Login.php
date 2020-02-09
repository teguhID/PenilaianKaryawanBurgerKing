<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
        $this->load->model('LoginModel');
        $this->load->library('session');
	}

    public function index()
	{
        $user = $this->session->userdata('user');
        if (empty($user)) {
            $this->load->view('login/login');
        }
        else{
            redirect('Route/Dashboard');
        }
	}

	public function Login()
	{
		if( isset($_POST['login'] ) ){
            $username = $this->input->post('username');
			$password = $this->input->post('password');
			$query = $this->LoginModel->Login($username, $password);
			if ($query->num_rows() > 0) {

				$dataSession = array(
					'user' => $this->input->post('username'),
					'pass' => $this->input->post('password'),
					'jabatan' => $this->LoginModel->GetJabatan($username)->row()->jabatan,
				);
				$this->session->set_userdata( $dataSession );
				
				echo "<script>alert('Login Berhasil');</script>";
				redirect('Route/Dashboard');
			} else {
				echo "<script>alert('Username dan Password tidak cocok');</script>";
				$this->load->view('login/login');
			}
		}
		else{
			echo "<script>alert('Ada Kesalahan');</script>";
			$this->load->view('login/login');
		}
	}

	public function Logout()
    {
        $this->session->sess_destroy();
        redirect('Login/index');
    }
}
