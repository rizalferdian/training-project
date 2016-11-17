<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kota extends MY_Controller {

  public function index()
  {
    $data['dataKota'] = $this->M_kota->read();
    $this->template->view('kota/table', $data);
  }
  
  public function create()
  {
    $this->form_validation->set_rules("nama", "Nama Kota", "required");
    if($this->form_validation->run() == false){
      echo err_msg(validation_errors());
    } else {
      $data = $this->input->post();
      $this->M_kota->create($data);
      echo succ_msg("Table kota telah bertambah");
    }
  }
  
  public function update()
  {
    $data = $this->input->post();
    $this->M_kota->update($data);
    echo succ_msg("Table kota telah terupdate");
  }
      
  public function delete($id)
  {
    $this->M_kota->delete($id);
  }
  
  public function form($id = null)
  {
    $data['form'] = base_url('kota/create');
    
    if(@$id){
    $data['dataKota'] = $this->M_kota->detail($id);  
    $data['form'] = base_url('kota/update');
    }
    
    $this->load->view('kota/form', $data);
  }
  
  public function data()
  {
    $data = $this->M_kota->read();
    $array = [];
    $gabungArray = [];
    foreach($data as $value){
      $gabungArray = array_merge(array_values($value), $value);
      $value[2] = 
      '<a href="#" class="update"> Update </a>'
      . ' | ' .
      '<a class="hapus" href="' . base_url($this->router->fetch_class() . '/delete/') . $gabungArray[0] . '">Hapus</a>'
      ;
      $gabungArray = array_merge($gabungArray, $value);
      array_push($array, $gabungArray);
    }
    $json["data"] = $array;
    echo json_encode($json);
  }
}
?>