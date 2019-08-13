<?php   
class Kriteria extends CI_Controller{   
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_kriteria");
    }

    public function index()
    {
        $data["kriteria"] = $this->m_kriteria->tampil_data();
        $data["tb_c2_jenis_lantai"] = $this->m_kriteria->tampil_data2();
        $data["tb_c3_luas_lantai"] = $this->m_kriteria->tampil_data3();
        $data["tb_c4_fasilitas_mck"] = $this->m_kriteria->tampil_data4();
        $data["tb_c5_sumber_penerangan_rumah"] = $this->m_kriteria->tampil_data5();
        $data["tb_c6_sumber_air_minum"] = $this->m_kriteria->tampil_data6();
        $data["tb_c7_bbm"] = $this->m_kriteria->tampil_data7();
        $data["tb_c8_pekerjaan"] = $this->m_kriteria->tampil_data8();
        $data["tb_c9_penghasilan"] = $this->m_kriteria->tampil_data9();
        $data["tb_c10_pendidikan"] = $this->m_kriteria->tampil_data10();
        $data["tb_c11_aset_berharga"] = $this->m_kriteria->tampil_data11();
        $data["tb_c12_tanggungan_keluarga"] = $this->m_kriteria->tampil_data12();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('coba/v_kriteria', $data);
        $this->load->view('admin/layout/footer');
    }

    

    public function update_tb1()
    {
        $id_c1 = $this->input->post('id_c1');
        $kriteria = $this->input->post('kriteria');
        $bobot = $this->input->post('bobot');

        $data = array(
            'kriteria' => $kriteria,
            'bobot' => $bobot
        );

        $this->db->where('id_c1', $id_c1);
        $this->db->update('tb_c1_dinding_rumah', $data);
        redirect('coba/kriteria','refresh');
    }

     public function update_tb2()
    {
        $id_c2 = $this->input->post('id_c2');
        $kriteria = $this->input->post('kriteria');
        $bobot = $this->input->post('bobot');

        $data = array(
            'kriteria' => $kriteria,
            'bobot' => $bobot
        );

        $this->db->where('id_c2', $id_c2);
        $this->db->update('tb_c2_jenis_lantai', $data);
        redirect('coba/kriteria','refresh');
    }

    public function update_tb3()
    {
        $id_c3 = $this->input->post('id_c3');
        $kriteria = $this->input->post('kriteria');
        $bobot = $this->input->post('bobot');

        $data = array(
            'kriteria' => $kriteria,
            'bobot' => $bobot
        );

        $this->db->where('id_c3', $id_c3);
        $this->db->update('tb_c3_luas_lantai', $data);
        redirect('coba/kriteria','refresh');
    }


    public function update_tb4()
    {
        $id_c4 = $this->input->post('id_c4');
        $kriteria = $this->input->post('kriteria');
        $bobot = $this->input->post('bobot');

        $data = array(
            'kriteria' => $kriteria,
            'bobot' => $bobot
        );

        $this->db->where('id_c4', $id_c4);
        $this->db->update('tb_c4_fasilitas_mck', $data);
        redirect('coba/kriteria','refresh');
    }


    public function update_tb5()
    {
        $id_c5 = $this->input->post('id_c5');
        $kriteria = $this->input->post('kriteria');
        $bobot = $this->input->post('bobot');

        $data = array(
            'kriteria' => $kriteria,
            'bobot' => $bobot
        );

        $this->db->where('id_c5', $id_c5);
        $this->db->update('tb_c5_sumber_penerangan_rumah', $data);
        redirect('coba/kriteria','refresh');
    }


    public function update_tb6()
    {
        $id_c6 = $this->input->post('id_c6');
        $kriteria = $this->input->post('kriteria');
        $bobot = $this->input->post('bobot');

        $data = array(
            'kriteria' => $kriteria,
            'bobot' => $bobot
        );

        $this->db->where('id_c6', $id_c6);
        $this->db->update('tb_c6_sumber_air_minum', $data);
        redirect('coba/kriteria','refresh');
    }


    public function update_tb7()
    {
        $id_c7 = $this->input->post('id_c7');
        $kriteria = $this->input->post('kriteria');
        $bobot = $this->input->post('bobot');

        $data = array(
            'kriteria' => $kriteria,
            'bobot' => $bobot
        );

        $this->db->where('id_c7', $id_c7);
        $this->db->update('tb_c7_bbm', $data);
        redirect('coba/kriteria','refresh');
    }


    public function update_tb8()
    {
        $id_c8 = $this->input->post('id_c8');
        $kriteria = $this->input->post('kriteria');
        $bobot = $this->input->post('bobot');

        $data = array(
            'kriteria' => $kriteria,
            'bobot' => $bobot
        );

        $this->db->where('id_c8', $id_c8);
        $this->db->update('tb_c8_pekerjaan', $data);
        redirect('coba/kriteria','refresh');
    }


    public function update_tb9()
    {
        $id_c9 = $this->input->post('id_c9');
        $kriteria = $this->input->post('kriteria');
        $bobot = $this->input->post('bobot');

        $data = array(
            'kriteria' => $kriteria,
            'bobot' => $bobot
        );

        $this->db->where('id_c9', $id_c9);
        $this->db->update('tb_c9_penghasilan', $data);
        redirect('coba/kriteria','refresh');
    }

    public function update_tb10()
    {
        $id_c10 = $this->input->post('id_c10');
        $kriteria = $this->input->post('kriteria');
        $bobot = $this->input->post('bobot');

        $data = array(
            'kriteria' => $kriteria,
            'bobot' => $bobot
        );

        $this->db->where('id_c10', $id_c10);
        $this->db->update('tb_c10_pendidikan', $data);
        redirect('coba/kriteria','refresh');
    }

    public function update_tb11()
    {
        $id_c11 = $this->input->post('id_c11');
        $kriteria = $this->input->post('kriteria');
        $bobot = $this->input->post('bobot');

        $data = array(
            'kriteria' => $kriteria,
            'bobot' => $bobot
        );

        $this->db->where('id_c11', $id_c11);
        $this->db->update('tb_c11_aset_berharga', $data);
        redirect('coba/kriteria','refresh');
    }

    public function update_tb12()
    {
        $id_c12 = $this->input->post('id_c12');
        $kriteria = $this->input->post('kriteria');
        $bobot = $this->input->post('bobot');

        $data = array(
            'kriteria' => $kriteria,
            'bobot' => $bobot
        );

        $this->db->where('id_c12', $id_c12);
        $this->db->update('tb_c12_tanggungan_keluarga', $data);
        redirect('coba/kriteria','refresh');
    }

}