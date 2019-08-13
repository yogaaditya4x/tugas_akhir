<?php 
class M_kriteria extends CI_Model{  


    private $_table  = "tb_c1_dinding_rumah";
    private $_table2 = "tb_c2_jenis_lantai";
    private $_table3 = "tb_c3_luas_lantai";
    private $_table4 = "tb_c4_fasilitas_mck";
    private $_table5 = "tb_c5_sumber_penerangan_rumah";
    private $_table6 = "tb_c6_sumber_air_minum";
    private $_table7 = "tb_c7_bbm";
    private $_table8 = "tb_c8_pekerjaan";
    private $_table9 = "tb_c9_penghasilan";
    private $_table10 = "tb_c10_pendidikan";
    private $_table11 = "tb_c11_aset_berharga";
    private $_table12 = "tb_c12_tanggungan_keluarga";

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
    public $kriteria;
    public $bobot;

    public function rules()
    {
    	return [
    		['field' => 'kriteria',
    		'label' => 'kriteria',
    		'rules' => 'required'],

    		['field' => 'bobot',
    		'label' => 'bobot',
    		'rules' => 'required'] 

       ];
   }

   public function tampil_data() 
     {
         return $this->db->get($this->_table)->result();
     }

     public function tampil_data2() 
     {
         return $this->db->get($this->_table2)->result();
     }
     public function tampil_data3() 
     {
         return $this->db->get($this->_table3)->result();
     }
      public function tampil_data4() 
     {
         return $this->db->get($this->_table4)->result();
     }
     public function tampil_data5() 
     {
         return $this->db->get($this->_table5)->result();
     }
     public function tampil_data6() 
     {
         return $this->db->get($this->_table6)->result();
     }
     public function tampil_data7() 
     {
         return $this->db->get($this->_table7)->result();
     }
     public function tampil_data8() 
     {
         return $this->db->get($this->_table8)->result();
     }
     public function tampil_data9() 
     {
         return $this->db->get($this->_table9)->result();
     }
     public function tampil_data10() 
     {
         return $this->db->get($this->_table10)->result();
     }
     public function tampil_data11() 
     {
         return $this->db->get($this->_table11)->result();
     }
     public function tampil_data12() 
     {
         return $this->db->get($this->_table12)->result();
     }


   public function getById($id) 
     {
         return $this->db->get_where($this->_table, ["id_c1" => $id])->row();
     }

     public function getById2($id) 
     {
         return $this->db->get_where($this->_table2, ["id_c2" => $id])->row();
     }
     public function getById3($id) 
     {
         return $this->db->get_where($this->_table3, ["id_c3" => $id])->row();
     }
     public function getById4($id) 
     {
         return $this->db->get_where($this->_table3, ["id_c4" => $id])->row();
     }
     public function getById5($id) 
     {
         return $this->db->get_where($this->_table5, ["id_c5" => $id])->row();
     }
     public function getById6($id) 
     {
         return $this->db->get_where($this->_table6, ["id_c6" => $id])->row();
     }
     public function getById7($id) 
     {
         return $this->db->get_where($this->_table7, ["id_c7" => $id])->row();
     }
     public function getById8($id) 
     {
         return $this->db->get_where($this->_table8, ["id_c8" => $id])->row();
     }
     public function getById9($id) 
     {
         return $this->db->get_where($this->_table9, ["id_c9" => $id])->row();
     }
     public function getById10($id) 
     {
         return $this->db->get_where($this->_table10, ["id_c10" => $id])->row();
     }
     public function getById11($id) 
     {
         return $this->db->get_where($this->_table11, ["id_c11" => $id])->row();
     }
     public function getById12($id) 
     {
         return $this->db->get_where($this->_table12, ["id_c12" => $id])->row();
     }


   public function update_tb1($id) 
     {
       $post = $this->input->post();
       $this->id_c1     = $post["id_c1"];
       $this->kriteria  = $post["kriteria"];
       $this->bobot     = $post["bobot"];

       $this->db->update($this->_table, $this, array('id_c1' => $post['id_c1']));

     }

   public function update_tb2($id) 
     {
       $post = $this->input->post();
       $this->id_c2     = $post["id_c2"];
       $this->kriteria  = $post["kriteria"];
       $this->bobot     = $post["bobot"];

       $this->db->update($this->_table2, $this, array('id_c2' => $post['id_c2']));
     }

     public function update_tb3($id) 
     {
       $post = $this->input->post();
       $this->id_c3     = $post["id_c3"];
       $this->kriteria  = $post["kriteria"];
       $this->bobot     = $post["bobot"];

       $this->db->update($this->_table3, $this, array('id_c3' => $post['id_c3']));
     }

     public function update_tb4($id) 
     {
       $post = $this->input->post();
       $this->id_c4     = $post["id_c4"];
       $this->kriteria  = $post["kriteria"];
       $this->bobot     = $post["bobot"];

       $this->db->update($this->_table4, $this, array('id_c4' => $post['id_c4']));
     }


     public function update_tb5($id) 
     {
       $post = $this->input->post();
       $this->id_c5     = $post["id_c5"];
       $this->kriteria  = $post["kriteria"];
       $this->bobot     = $post["bobot"];

       $this->db->update($this->_table5, $this, array('id_c5' => $post['id_c5']));
     }


     public function update_tb6($id) 
     {
       $post = $this->input->post();
       $this->id_c6     = $post["id_c6"];
       $this->kriteria  = $post["kriteria"];
       $this->bobot     = $post["bobot"];

       $this->db->update($this->_table6, $this, array('id_c6' => $post['id_c6']));
     }


     public function update_tb7($id) 
     {
       $post = $this->input->post();
       $this->id_c7     = $post["id_c7"];
       $this->kriteria  = $post["kriteria"];
       $this->bobot     = $post["bobot"];

       $this->db->update($this->_table7, $this, array('id_c7' => $post['id_c7']));
     }


     public function update_tb8($id) 
     {
       $post = $this->input->post();
       $this->id_c8     = $post["id_c8"];
       $this->kriteria  = $post["kriteria"];
       $this->bobot     = $post["bobot"];

       $this->db->update($this->_table8, $this, array('id_c8' => $post['id_c8']));
     }


     public function update_tb9($id) 
     {
       $post = $this->input->post();
       $this->id_c9     = $post["id_c9"];
       $this->kriteria  = $post["kriteria"];
       $this->bobot     = $post["bobot"];

       $this->db->update($this->_table8, $this, array('id_c9' => $post['id_c9']));
     }

     public function update_tb10($id) 
     {
       $post = $this->input->post();
       $this->id_c10     = $post["id_c10"];
       $this->kriteria  = $post["kriteria"];
       $this->bobot     = $post["bobot"];

       $this->db->update($this->_table10, $this, array('id_c10' => $post['id_c10']));
     }

     public function update_tb11($id) 
     {
       $post = $this->input->post();
       $this->id_c11     = $post["id_c11"];
       $this->kriteria  = $post["kriteria"];
       $this->bobot     = $post["bobot"];

       $this->db->update($this->_table11, $this, array('id_c11' => $post['id_c11']));
     }

     public function update_tb12($id) 
     {
       $post = $this->input->post();
       $this->id_c12     = $post["id_c12"];
       $this->kriteria  = $post["kriteria"];
       $this->bobot     = $post["bobot"];

       $this->db->update($this->_table12, $this, array('id_c12' => $post['id_c12']));
     }
 


}