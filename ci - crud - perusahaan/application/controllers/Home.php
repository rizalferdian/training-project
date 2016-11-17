<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

  public function index()
  {
    $data['totalPegawai'] = $this->M_pegawai->total();
    $data['totalPosisi'] = $this->M_posisi->total();
    $data['totalKota'] = $this->M_kota->total();
    $this->template->view('home', $data);
    $this->load->view("_layout/_morris");
  }
}
?>