<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('coba/v_login');
	}

	public function ceklogin(){
		if(isset($_POST['login'])){
			$username	= $this->input->post('user',true);
			$password	= $this->input->post('pass',true);
			$cek 	= $this->m_login->proseslogin($username,$password);
			$hasil	= count($cek);
			if ($hasil > 0){
				
				$this->session->set_userdata('user_login', $username);
				redirect('coba/dashboard');

				// echo "masuk";
			}else{
				redirect('coba/login');
				// echo "mati";
			}

		}
	}

}

/* End of file login.php */
/* Location: ./application/controllers/coba/login.php */