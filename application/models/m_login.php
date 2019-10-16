<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function proseslogin($username,$password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('tb_user')->row();
	}

	

}

/* End of file m_login.php */
/* Location: ./application/models/m_login.php */