<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends Auth_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model("M_siswa");
    $this->load->model("M_kelas");
  }

  public function index()
  {
    $data['judul'] = "Menu Siswa";
    $data['data_siswa'] = $this->M_siswa->getSiswa();
    $this->load_template('siswa/home', $data);
  }

  public function add()
  {
    $data['judul'] = "Tambah Siswa";
    $data['data_kelas'] = $this->M_kelas->getKelas();
    $this->load_template("siswa/form_tambah_siswa", $data);
  }

  public function act_add()
  {
    $this->form_validation->set_rules('nama', "Nama", 'required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('id_kelas', 'Nama Kelas', 'required');
    
    if($this->form_validation->run() == false)
    {
      $this->session->set_flashdata('alert_msg', err_msg(validation_errors()));
      redirect('siswa/add');
    }
    else
    {
      $param  = $this->input->post();
      $proses = $this->M_siswa->act_tambah($param);
  
      if($proses >= 0){
        $this->session->set_flashdata('alert_msg', succ_msg("Siswa Berhasil diinputkan"));
        redirect('siswa');
      } else {
        $this->session->set_flashdata('alert_msg', err_msg("Siswa Gagal diinputkan"));
        redirect('siswa/add');
      }
    }
  }

  public function edit($id)
  {
    $data['judul'] = "Edit Siswa";
    $data['data_siswa'] = $this->M_siswa->getDetailSiswa($id);
    $data['data_kelas'] = $this->M_kelas->getKelas();
    $this->load_template("siswa/form_edit_siswa", $data);
  }

  public function act_edit()
  {
    $param  = $this->input->post();
    $proses = $this->M_siswa->act_edit($param);

    if($proses >= 0){
      $this->session->set_flashdata('alert_msg', succ_msg("Siswa Berhasil diedit"));
      redirect('siswa');
    } else {
      $this->session->set_flashdata('alert_msg', err_msg("Siswa Gagal diedit"));
      redirect($_SERVER['HTTP_REFERER']);
    }
  }

  public function delete($id)
  {
  $proses = $this->M_siswa->act_hapus($id);

    if($proses >= 0){
      $this->session->set_flashdata('alert_msg', succ_msg("Siswa Berhasil dihapus"));
      redirect('siswa');
    } else {
      $this->session->set_flashdata('alert_msg', err_msg("Siswa Gagal dihapus"));
      redirect($_SERVER['HTTP_REFERER']);
    }
  }
}
?>