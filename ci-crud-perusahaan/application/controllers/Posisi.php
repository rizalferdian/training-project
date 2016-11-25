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
  
  public function create_import()
  {
    $validation = true;
    if (empty($_FILES['file']['name']))
    {
      $this->form_validation->set_rules('file', 'File', 'required');
      $validation = $this->form_validation->run();
    }
    
    if($validation == false){
      echo err_msg(validation_errors());
    } else {
      
      $config['upload_path']          = './assets/excel/';
      $config['allowed_types']        = 'xlsx|xls';
      $config['max_size']             = 100;

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('file')) {
        echo err_msg($this->upload->display_errors());
      } else {
        $dataPosisi = $this->M_posisi->read();
        
        error_reporting(E_ALL);
        include './assets/phpexcel/Classes/PHPExcel/IOFactory.php';
        
        $file = str_replace(' ', '_', $_FILES['file']['name']);
        $inputFileName = './assets/excel/' .  $file;
        $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
        
        $sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
        
        foreach($sheetData as $key => $value){
          
          if($key == "1"){
              continue;
            }
          
          foreach($value as $key => $value2){
            if($key == "A" or $key == "B"){
              $temp[] = trim($value2);
            } else {
              continue;
            }
          }
          
          $check = true;
          foreach($dataPosisi as $value) {
            if(strtolower($value['nama']) == strtolower($temp[1])) {
              $check = false;
              break;
            }
          }
          
          if($check){
            $data['nama'] = trim($temp[1]);
            $this->M_posisi->create($data);
          }
          
          unset($temp);
        }
        
        unlink('./assets/excel/' . $file);        
        $this->session->set_flashdata('alert', succ_msg("Table telah diimport"));
        redirect("posisi");
      }
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
  
    public function form_import()
  {
    $data['form'] = base_url('posisi/create_import');
    
    $this->load->view('posisi/form_import', $data);
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
  
  public function export()
  {
    error_reporting(E_ALL);
    
    include_once './assets/phpexcel/Classes/PHPExcel.php';
    $objPHPExcel = new PHPExcel();
    
    $data = $this->M_posisi->read();
    
    $objPHPExcel = new PHPExcel(); 
    $objPHPExcel->setActiveSheetIndex(0); 
    $rowCount = 1; 
    
    $objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, "id"); 
    $objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, "nama");
    $rowCount++;
    
    foreach($data as $value){
        $objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, $value['id']); 
        $objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, $value['nama']); 
        $rowCount++; 
    } 
    
    $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel); 
    $objWriter->save('./assets/excel/posisi.xlsx'); 
    
    $this->load->helper('download');
    force_download('./assets/excel/posisi.xlsx', NULL);
    redirect("posisi");
  }
}
?>