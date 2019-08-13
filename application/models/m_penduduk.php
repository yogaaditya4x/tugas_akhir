<?php 
class M_penduduk extends CI_Model{  
	// public function tampil_data()
	// {
	// 	return $this->db->get('tb_penduduk');
	// } 

    private $_table = "tb_penduduk";//nama tabel
// nama kolom di tabel, harus sama huruf besar dan huruf kecilnya!
    public $id_penduduk;
    public $nama;
    public $jenis_kelamin;
    public $nik;
    public $kk;
    public $alamat;
    public $rt;
    public $rw;

    public function rules()
    {
    	return [
    		['field' => 'nama',
    		'label' => 'nama',
    		'rules' => 'required'],

    		['field' => 'jenis_kelamin',
    		'label' => 'jenis_kelamin',
    		'rules' => 'required'],

    		['field' => 'nik',
    		'label' => 'nik',
    		'rules' => 'required'],

    		['field' => 'kk',
    		'label' => 'kk',
    		'rules' => 'required'],

    		['field' => 'alamat',
    		'label' => 'alamat',
    		'rules' => 'required'],

           ['field' => 'rt',
           'label' => 'rt',
           'rules' => 'required'],

           ['field' => 'rw',
           'label' => 'rw',
           'rules' => 'required']
       ];
   }

   public function tampil_data() //Menampilkan Data Tabel Penduduk
   {
       return $this->db->get($this->_table)->result();
   }


   public function getById($id) // Memanggil id dari tabel Penduduk 
   {
       return $this->db->get_where($this->_table, ["id_penduduk" => $id])->row();
   }

   public function save() //Simpan Penduduk
   {
       $post = $this->input->post();
        // $this->id = uniqid(); //$this->buat_kode(); 
       $this->nama          = $post["nama"];
       $this->jenis_kelamin = $post["jenis_kelamin"];
       $this->nik           = $post["nik"];
       $this->kk            = $post["kk"];
       $this->alamat        = $post["alamat"];
       $this->rt            = $post["rt"];
       $this->rw            = $post["rw"];
       $this->db->insert($this->_table, $this);
   }

   public function update($id) //Edit Penduduk
   {
       $post = $this->input->post();
        $this->id_penduduk = $post["id_penduduk"];
       $this->nama            = $post["nama"];
       $this->jenis_kelamin   = $post["jenis_kelamin"];
       $this->nik             = $post["nik"];
       $this->kk              = $post["kk"];
       $this->alamat          = $post["alamat"];
       $this->rt              = $post["rt"];
       $this->rw              = $post["rw"];
      $this->db->update($this->_table, $this, array('id_penduduk' => $post['id_penduduk']));
  }

  public function delete($id) //Hapus Data Penduduk
  {
   return $this->db->delete($this->_table, array("id_penduduk" => $id));
}


}