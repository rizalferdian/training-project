<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends MY_Controller {

  public function index()
  {
    $data['dataPegawai'] = $this->M_pegawai->read();
    $this->template->view('pegawai/table', $data);
  }
  
  public function create()
  {
    $this->form_validation->set_rules("nama", "Nama Pegawai", "required");
    $this->form_validation->set_rules("telp", "Nomor Telepon", "required");
    $this->form_validation->set_rules("id_posisi", "Posisi Kerja", "required");
    $this->form_validation->set_rules("id_kota", "Kota Asal", "required");
    $this->form_validation->set_rules("id_kelamin", "Jenis Kelamin", "required");
    if($this->form_validation->run() == false){
      echo err_msg(validation_errors());
    } else {
      $data = $this->input->post();
      $this->M_pegawai->create($data);
      echo succ_msg("Table pegawai telah bertambah");
    }
  }
  
  public function update()
  {
    $data = $this->input->post();
    $this->M_pegawai->update($data);
    echo succ_msg("Table pegawai telah terupdate");
  }
      
  public function delete($id)
  {
    $this->M_pegawai->delete($id);
  }
  
  public function form($id = null)
  {
    $data['dataPosisi'] = $this->M_posisi->read();
    $data['dataKota'] = $this->M_kota->read();
    $data['form'] = base_url('pegawai/create');
    
    if(@$id){
    $data['dataPegawai'] = $this->M_pegawai->detail($id);  
    $data['form'] = base_url('pegawai/update');
    }
    
    $this->load->view('pegawai/form', $data);
  }
  
 public function data()
  {
    $data = $this->M_pegawai->read();
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
    
    $data = $this->M_pegawai->read();
    
    $objPHPExcel = new PHPExcel(); 
    $objPHPExcel->setActiveSheetIndex(0); 
    $rowCount = 1; 
    
    $objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, "id"); 
    $objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, "Nama Pegawai");
    $objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount, "Kelamin");
    $objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, "telp");
    $objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, "Kota");
    $objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, "Posisi");
    $rowCount++;
    
    foreach($data as $value){
        $objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, $value['id']); 
        $objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, $value['namaPegawai']); 
        $objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount, $value['namaKelamin']); 
        $objPHPExcel->getActiveSheet()->setCellValueExplicit('D'.$rowCount, $value['telp'], PHPExcel_Cell_DataType::TYPE_STRING);
        $objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, $value['namaKota']); 
        $objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, $value['namaPosisi']); 
        $rowCount++; 
    } 
    
    $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel); 
    $objWriter->save('./assets/excel/pegawai.xlsx'); 
    
    $this->load->helper('download');
    force_download('./assets/excel/pegawai.xlsx', NULL);
    redirect("pegawai");
  }
}
?>
