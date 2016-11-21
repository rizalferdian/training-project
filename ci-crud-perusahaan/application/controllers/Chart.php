<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends MY_Controller {

  public function index()
  {
    $dataPosisi = $this->M_posisi->dataChart();
    $json[0] = json_encode($dataPosisi);
    $dataKota = $this->M_kota->dataChart();
    $json[1] = json_encode($dataKota);
    ?>
    
      Morris.Donut({
          element: 'morris-donut-chart-posisi',
          data: <?php echo $json[0]; ?>,
          colors: ["#337ab7", "#5cb85c", "#f0ad4e", "#d9534f"],
          resize: true
      });
      
      Morris.Donut({
          element: 'morris-donut-chart-kota',
          data: <?php echo $json[1]; ?>,
          colors: ["#337ab7", "#5cb85c", "#f0ad4e", "#d9534f"],
          resize: true
      });
    
    <?php
  }
}
?>