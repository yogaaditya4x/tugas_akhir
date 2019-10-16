 <?php  
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Penilai extends CI_Controller {
 

 public function __construct()
	{
		parent::__construct();
		$this->load->model("m_penilai");
		$this->load->library('form_validation');
	}
	
 	public function index()
 	{
 		$data['tb_penilai'] = $this->m_penilai->tampil_data();
 		$this->load->view('admin/layout/header');
 		$this->load->view('admin/layout/sidebar');
 		$this->load->view('coba/v_penilai', $data);
 		$this->load->view('admin/layout/footer');
 	}
  
 }