<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

  public function __construct() {
    parent::__construct();
    
    if($this->session->userdata('login') == 1 && $this->router->fetch_class() == "login")
    {
      $this->session->set_flashdata('alert_msg', err_msg("Anda Sudah Login"));
      redirect('home');
    } 
    else if($this->session->userdata('login') == 0 && $this->router->fetch_class() != "login")
    {
      $this->session->set_flashdata('alert_msg', err_msg("Anda Harus Login"));
      redirect('login');
    }
  }
}
?>