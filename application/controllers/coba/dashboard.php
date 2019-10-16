<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('dashboard');
		$this->load->view('admin/layout/footer');

	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/coba/dashboard.php */