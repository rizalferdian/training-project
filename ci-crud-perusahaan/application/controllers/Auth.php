<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

  public function index()
  {
    $this->form_validation->set_rules("username", "Username", "required");
    $this->form_validation->set_rules("password", "Password", "required");
    if($this->form_validation->run() == false){
      $this->session->set_flashdata("alert_msg", err_msg(validation_errors()));
      $array[0] = false;
      $array[1] = $this->session->flashdata("alert_msg");
    } else {
        $data = $this->input->post();
        $dataLogin = $this->M_auth->login($data);
      if(count($dataLogin) > 0){
        $this->session->set_userdata("login", 1);
        $this->session->set_userdata("id", $dataLogin->id);
        $this->session->set_userdata("username", $dataLogin->username);
        $array[0] = true;
        $array[1] = base_url("home");
      } else {
        $this->session->set_flashdata("alert_msg", err_msg("Username atau Password anda salah"));
        $array[0] = false;
        $array[1] = $this->session->flashdata("alert_msg");
      }
    }
    echo json_encode($array);
  }
  
  public function logout()
  {
    $this->session->sess_destroy();
    redirect('login');
  }
}
?>