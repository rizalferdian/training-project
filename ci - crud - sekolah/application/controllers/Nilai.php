<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends Auth_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model("M_nilai");
    $this->load->model("M_mapel");
    $this->load->model("M_siswa");
  }

  public function index()
  {
    $data['judul'] = "Menu Nilai";
    $data['data_nilai'] = $this->M_nilai->getNilai();
    $this->load_template('nilai/home', $data);
  }

  public function add()
  {
    $data['judul'] = "Tambah Nilai";
    $data['data_mapel'] = $this->M_mapel->getMapel();
    $data['data_siswa'] = $this->M_siswa->getSiswa();
    $this->load_template("nilai/form_tambah_nilai", $data);
  }

  public function act_add()
  {
    $this->form_validation->set_rules('id_siswa', "Nama Siswa", 'required');
    $this->form_validation->set_rules('id_mapel', 'Nama Mata Pelajaran', 'required');
    $this->form_validation->set_rules('total_nilai', 'Jumlah Nilai', 'required');
    
    
    if($this->form_validation->run() == false)
    {
      $this->session->set_flashdata('alert_msg', err_msg(validation_errors()));
      redirect('nilai/add');
    }
    else
    {
      $param  = $this->input->post();
      $proses = $this->M_nilai->act_tambah($param);
  
      if($proses >= 0){
        $this->session->set_flashdata('alert_msg', succ_msg("Nilai Berhasil diinputkan"));
        redirect('nilai');
      } else {
        $this->session->set_flashdata('alert_msg', err_msg("Nilai Gagal diinputkan"));
        redirect('nilai/add');
      }
    }
  }

  public function edit($id)
  {
    $data['judul'] = "Edit Nilai";
    $data['data_nilai'] = $this->M_nilai->getDetailNilai($id);
    $data['data_mapel'] = $this->M_mapel->getMapel();
    $data['data_siswa'] = $this->M_siswa->getSiswa();
    $this->load_template("nilai/form_edit_nilai", $data);
  }

  public function act_edit()
  {
    $param  = $this->input->post();
    $proses = $this->M_nilai->act_edit($param);

    if($proses >= 0){
      $this->session->set_flashdata('alert_msg', succ_msg("Nilai Berhasil diedit"));
      redirect('nilai');
    } else {
      $this->session->set_flashdata('alert_msg', err_msg("Nilai Gagal diedit"));
      redirect($_SERVER['HTTP_REFERER']);
    }
  }

  public function delete($id)
  {
  $proses = $this->M_nilai->act_hapus($id);

    if($proses >= 0){
      $this->session->set_flashdata('alert_msg', succ_msg("Nilai Berhasil dihapus"));
      redirect('nilai');
    } else {
      $this->session->set_flashdata('alert_msg', err_msg("Nilai Gagal dihapus"));
      redirect($_SERVER['HTTP_REFERER']);
    }
  }
}
?>