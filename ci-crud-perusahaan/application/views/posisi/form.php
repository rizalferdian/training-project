
<!-- /.row -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        Basic Form Elements
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
            <form class="form-horizontal" action="<?php echo $form; ?>" method="post" id="myform">
              <input type="hidden" name='id' value="<?php echo @$dataPosisi['id']; ?>">
              <div class="form-group">
                <label>Nama Posisi:</label>
                <input class="form-control"  placeholder="Enter text"  name='nama' value="<?php echo @$dataPosisi['nama']; ?>">
                <p class="help-block">Example HRD.</p>
              </div>

            </form>
          </div>
          <div class="col-lg-1"></div>
        </div>
        <!-- /.row (nested) -->
      </div>
      <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
