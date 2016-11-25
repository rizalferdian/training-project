
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Tables Kota</h1>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          DataTables Advanced Tables
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
          <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Aksi</th>
              </tr>
            </thead>
          </table>
          <a href="#" class="tambah btn btn-default">Tambah Data</a>
          <a href="#" class="import btn btn-default">Import File</a>
          <a href="<?php echo base_url('kota/export'); ?>" class="btn btn-default">Export File</a>
          <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
      </div>
      <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
</div>
<!-- /#page-wrapper -->

<!-- Modal -->
<?php modal(); ?>
<?php alert($this->session->flashdata('alert')); ?>