<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Dashboard</h1>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-4 col-md-6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-3">
              <i class="fa fa-table fa-5x"></i>
            </div>
            <div class="col-xs-9 text-right">
              <div class="huge">
                <?php echo $totalPegawai; ?>
              </div>
              <div>Total Pegawai</div>
            </div>
          </div>
        </div>
        <a href="<?php echo base_url('pegawai'); ?>">
          <div class="panel-footer">
            <span class="pull-left">View Details</span>
            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="panel panel-green">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-3">
              <i class="fa fa-table fa-5x"></i>
            </div>
            <div class="col-xs-9 text-right">
              <div class="huge">
                <?php echo $totalPosisi; ?>
              </div>
              <div>Total Posisi</div>
            </div>
          </div>
        </div>
        <a href="<?php echo base_url('posisi'); ?>">
          <div class="panel-footer">
            <span class="pull-left">View Details</span>
            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="panel panel-yellow">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-3">
              <i class="fa fa-table fa-5x"></i>
            </div>
            <div class="col-xs-9 text-right">
              <div class="huge">
                <?php echo $totalKota; ?>
              </div>
              <div>Total Kota</div>
            </div>
          </div>
        </div>
        <a href="<?php echo base_url('kota'); ?>">
          <div class="panel-footer">
            <span class="pull-left">View Details</span>
            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          Donut Chart Posisi
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
          <div id="morris-donut-chart-posisi"></div>
        </div>
        <!-- /.panel-body -->
      </div>
      <!-- /.panel -->
    </div>
    <div class="col-lg-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          Donut Chart Kota
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
          <div id="morris-donut-chart-kota"></div>
        </div>
        <!-- /.panel-body -->
      </div>
      <!-- /.panel -->
    </div>
  </div>
  <?php echo $this->session->flashdata("alert_msg"); ?>
</div>
<!-- /#page-wrapper -->
