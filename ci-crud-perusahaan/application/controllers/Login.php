<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

  public function index()
  {
    $this->template->view_login('login');
  }
}
?>