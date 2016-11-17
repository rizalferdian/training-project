<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MY_Controller {

  public function index()
  {
    $id = $this->session->userdata("id");
    $data["form"] = base_url("profile/update");
    $data["dataProfile"] = $this->M_profile->detail($id);
    $this->template->view("profile/form", $data);
  }
  
  public function update()
  {
    $input = $this->input->post();
    
    $data['id'] = $input['id'];
    $data['username'] = $input['username'];
    if (
      !empty($input['password']) and 
      ($input['password'] == $input['confirmPassword'])
    ) {
      $data['password'] = md5($input['password']);
    }
    
    if (!empty($_FILES['file']['name'])) {
      $data['img'] = $_FILES['file']['name'];
      
      $config['upload_path']          = './assets/img/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 100;

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('file')) {
              echo $this->upload->display_errors();
      } else {
              echo "sukses";
      }
    }
    
    $this->M_profile->update($data);
    echo succ_msg("Data telah terupdate");
  }
}