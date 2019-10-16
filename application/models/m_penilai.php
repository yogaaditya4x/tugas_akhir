<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_penilai extends CI_Model {

 private $_table = "tb_penilai";

    public $id_penilai;
    public $id_penduduk;
    public $id_c1;
    public $id_c2;
    public $id_c3;
    public $id_c4;
    public $id_c5;
    public $id_c6;
    public $id_c7;
    public $id_c8;
    public $id_c9;
    public $id_c10;
    public $id_c11;
    public $id_c12;
    

    public function rules()
    {
    	return [
    	['field' => 'nama',
    	'label' => 'nama',
    	'rules' => 'required'],

    	['field' => 'c1',
    	'label' => 'c1',
    	'rules' => 'required'],

        ['field' => 'c2',
        'label' => 'c2',
        'rules' => 'required'],

        ['field' => 'c3',
        'label' => 'c3',
        'rules' => 'required'],

        ['field' => 'c4',
        'label' => 'c4',
        'rules' => 'required'],

        ['field' => 'c5',
        'label' => 'c5',
        'rules' => 'required'],

        ['field' => 'c6',
        'label' => 'c6',
        'rules' => 'required'],

        ['field' => 'c7',
        'label' => 'c7',
        'rules' => 'required'],

        ['field' => 'c8',
        'label' => 'c8',
        'rules' => 'required'],

        ['field' => 'c9',
        'label' => 'c9',
        'rules' => 'required'],

        ['field' => 'c10',
        'label' => 'c10',
        'rules' => 'required'],

        ['field' => 'c11',
        'label' => 'c11',
        'rules' => 'required'],

        ['field' => 'c12',
        'label' => 'c12',
        'rules' => 'required'],
    ];
    }

    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('tb_penilai');
        $this->db->join('tb_penduduk','tb_penilai.id_penduduk=tb_penduduk.id_penduduk');
        $query = $this->db->get();
        return $query->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_penduduk" => $id])->row();
    }

    public function data_kriteria()
    {
        return $this->db->get('id_kriteria')->result();
    }
    
	

}