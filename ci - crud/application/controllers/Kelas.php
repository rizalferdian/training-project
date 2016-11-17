<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends Auth_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model("M_kelas");
  }

  public function index()
  {
    $data['judul'] = "Menu Kelas";
    $data['data_kelas'] = $this->M_kelas->getKelas();
    $this->load_template('kelas/home', $data);
  }

  public function add()
  {
    $data['judul'] = "Tambah Kelas";
    $this->load_template("kelas/form_tambah_kelas", $data);
  }

  public function act_add()
  {
    $this->form_validation->set_rules('nama_kelas', "Nama", 'required');
    
    if($this->form_validation->run() == false)
    {
      $this->session->set_flashdata('alert_msg', err_msg(validation_errors()));
      redirect('kelas/add');
    }
    else
    {
      $param  = $this->input->post();
      $proses = $this->M_kelas->act_tambah($param);
  
      if($proses >= 0){
        $this->session->set_flashdata('alert_msg', succ_msg("Kelas Berhasil diinputkan"));
        redirect('kelas');
      } else {
        $this->session->set_flashdata('alert_msg', err_msg("Kelas Gagal diinputkan"));
        redirect('kelas/add');
      }
    }
  }

  public function edit($id)
  {
    $data['judul'] = "Edit Kelas";
    $data['data_kelas'] = $this->M_kelas->getDetailKelas($id);
    $this->load_template("kelas/form_edit_kelas", $data);
  }

  public function act_edit()
  {
    $param  = $this->input->post();
    $proses = $this->M_kelas->act_edit($param);

    if($proses >= 0){
      $this->session->set_flashdata('alert_msg', succ_msg("Kelas Berhasil diedit"));
      redirect('kelas');
    } else {
      $this->session->set_flashdata('alert_msg', err_msg("Kelas Gagal diedit"));
      redirect($_SERVER['HTTP_REFERER']);
    }
  }

  public function delete($id)
  {
  $proses = $this->M_kelas->act_hapus($id);

    if($proses >= 0){
      $this->session->set_flashdata('alert_msg', succ_msg("Kelas Berhasil dihapus"));
      redirect('kelas');
    } else {
      $this->session->set_flashdata('alert_msg', err_msg("Kelas Gagal dihapus"));
      redirect($_SERVER['HTTP_REFERER']);
    }
  }
}
?>