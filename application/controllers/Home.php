<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Home extends CI_Controller {

	public function index()
	{
		$data["penduduk"] = $this->m_penduduk->tampil_data();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('coba/v_penduduk', $data);
		$this->load->view('admin/layout/footer');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */