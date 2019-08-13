<?php   
class Penduduk extends CI_Controller{   
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("m_penduduk");
	}

	public function index()
	{
		$data["penduduk"] = $this->m_penduduk->tampil_data();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('coba/v_penduduk', $data);
		$this->load->view('admin/layout/footer');
	}

	public function add() 
	{
		$penduduk = $this->m_penduduk;
		 $validation = $this->form_validation;
        $validation->set_rules($penduduk->rules());

        if ($validation->run()) {
            $penduduk->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
		redirect(site_url('coba/penduduk'));
	}

	public function edit($id= null)
	{
		
       
        $penduduk = $this->m_penduduk;
        $validation = $this->form_validation;
        $validation->set_rules($penduduk->rules());

        if ($validation->run()) {
            $penduduk->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
             redirect(site_url('coba/penduduk/index'));
        }

        $data["penduduk"] = $penduduk->getById($id);
        if (!$data["penduduk"]) show_404();
        $this->load->view('admin/layout/header');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('coba/v_editPenduduk', $data);
		$this->load->view('admin/layout/footer');
  //       $this->load->view("coba/", $data);


		// if (!isset($id)) redirect('coba/v_penduduk');
		// $penduduk = $this->m_penduduk;
		// if (!isset($id));

		// $penduduk = $this->m_penduduk;
		// $data["penduduk"] = $penduduk->getById($id);
		// if (!$data["penduduk"]) show_404();
	}

	public function delete($id=null)
	{
		if (!isset($id)) show_404();

		if ($this->m_penduduk->delete($id)) {
			redirect(site_url('coba/penduduk', $data));
		}
	}
}