<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends Auth_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model("M_guru");
  }

  public function index()
  {
    $data['judul'] = "Menu Guru";
    $data['data_guru'] = $this->M_guru->getGuru();
    $this->load_template('guru/home', $data);
  }

  public function add()
  {
    $data['judul'] = "Tambah Guru";
    $this->load_template("guru/form_tambah_guru", $data);
  }

  public function act_add()
  {
    $this->form_validation->set_rules('nama_guru', "Nama", 'required');
    
    if($this->form_validation->run() == false)
    {
      $this->session->set_flashdata('alert_msg', err_msg(validation_errors()));
      redirect('guru/add');
    }
    else
    {
      $param  = $this->input->post();
      $proses = $this->M_guru->act_tambah($param);
  
      if($proses >= 0){
        $this->session->set_flashdata('alert_msg', succ_msg("Guru Berhasil diinputkan"));
        redirect('guru');
      } else {
        $this->session->set_flashdata('alert_msg', err_msg("Guru Gagal diinputkan"));
        redirect('guru/add');
      }
    }
  }

  public function edit($id)
  {
    $data['judul'] = "Edit Guru";
    $data['data_guru'] = $this->M_guru->getDetailGuru($id);
    $this->load_template("guru/form_edit_guru", $data);
  }

  public function act_edit()
  {
    $param  = $this->input->post();
    $proses = $this->M_guru->act_edit($param);

    if($proses >= 0){
      $this->session->set_flashdata('alert_msg', succ_msg("Guru Berhasil diedit"));
      redirect('guru');
    } else {
      $this->session->set_flashdata('alert_msg', err_msg("Guru Gagal diedit"));
      redirect($_SERVER['HTTP_REFERER']);
    }
  }

  public function delete($id)
  {
  $proses = $this->M_guru->act_hapus($id);

    if($proses >= 0){
      $this->session->set_flashdata('alert_msg', succ_msg("Guru Berhasil dihapus"));
      redirect('guru');
    } else {
      $this->session->set_flashdata('alert_msg', err_msg("Guru Gagal dihapus"));
      redirect($_SERVER['HTTP_REFERER']);
    }
  }
}
?>