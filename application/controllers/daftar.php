<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

class Daftar extends CI_Controller{


	public function index()
	{
		$this->load->view('coba/v_daftar');
	}


public function add() 
	{
		$this->load->model('m_daftar');

		$daftar_user = $this->m_daftar;
		 $validation = $this->form_validation;
        $validation->set_rules($daftar_user->rules());

        if ($validation->run()) {
            $daftar_user->save();
            // $this->session->set_flashdata('success', 'Berhasil disimpan');
				echo "<script>alert('Selamat ,akun anda telah terdaftar | silahkan login untuk masuk')</script>";
				echo "<script>window.location='".site_url('home')."'</script>";

        }
	}
}
