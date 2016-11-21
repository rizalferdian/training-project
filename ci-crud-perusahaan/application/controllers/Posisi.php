<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posisi extends MY_Controller {

  public function index()
  {
    $data['dataPosisi'] = $this->M_posisi->read();
    $this->template->view('posisi/table', $data);
  }
  
  public function create()
  {
    $this->form_validation->set_rules("nama", "Nama Posisi", "required");
    if($this->form_validation->run() == false){
      echo err_msg(validation_errors());
    } else {
      $data = $this->input->post();
      $this->M_posisi->create($data);
      echo succ_msg("Table posisi telah bertambah");
    }
  }
  
  public function update()
  {
    $data = $this->input->post();
    $this->M_posisi->update($data);
    echo succ_msg("Table posisi telah terupdate");
  }
      
  public function delete($id)
  {
    $this->M_posisi->delete($id);
  }
  
  public function form($id = null)
  {
    $data['form'] = base_url('posisi/create');
    
    if(@$id){
    $data['dataPosisi'] = $this->M_posisi->detail($id);  
    $data['form'] = base_url('posisi/update');
    }
    
    $this->load->view('posisi/form', $data);
  }
  
 public function data()
  {
    $data = $this->M_posisi->read();
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