
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
            <form class="form-horizontal" action="<?php echo $form; ?>" method="post" id="form_import"  enctype="multipart/form-data">
              <div class="form-group">
                <label>Pilih File:</label>
                
                  <input type="file" name="file" class="form-control">
                <p class="help-block">Example extiension "xlsx" or "xls" .</p>
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
