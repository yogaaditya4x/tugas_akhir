 <?php 
class M_daftar extends CI_Model{   
	

    private $_table = "tb_user";

    public $id_user;
    public $nama;
    public $alamat;
    public $no_telepon;
    public $username;
    public $password;
    public $level_user;

    public function rules()
    {
    	return [
    		['field' => 'nama',
    		'label' => 'nama',
    		'rules' => 'required'],

    		['field' => 'alamat',
    		'label' => 'alamat',
    		'rules' => 'required'],

    		['field' => 'no_telepon',
    		'label' => 'no_telepon',
    		'rules' => 'required'],

    		['field' => 'username',
    		'label' => 'username',
    		'rules' => 'required'],

    		['field' => 'password',
    		'label' => 'password',
    		'rules' => 'required'],

           ['field' => 'level_user',
           'label' => 'level_user',
           'rules' => 'required'],

       ];
   }


   public function save() 
   {
       $post = $this->input->post();
        
       $this->nama          	  = $post["nama"];
       $this->alamat		      	= $post["alamat"];
       $this->no_telepon        = $post["no_telepon"];
       $this->username          = $post["username"];
       $this->password        	= md5($post["password"]);
       $this->level_user        = $post["level_user"];
       $this->db->insert($this->_table, $this);
   }


}