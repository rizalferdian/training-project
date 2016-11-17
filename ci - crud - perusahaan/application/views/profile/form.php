<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">User Profile</h1>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          Basic Form Elements
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-offset-1 col-lg-4">
            <img src="<?php echo base_url("assets/img/" . @$dataProfile['img']); ?>" width="256px"></img>
            </div>
            
            <div class="col-lg-6">
              <form class="form-horizontal" action="<?php echo @$form; ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name='id' value="<?php echo @$dataProfile['id']; ?>">
                <div class="form-group">
                  <label for="username">Username:</label>
                  <input type="text" class="form-control" placeholder="Enter text" name='username' value="<?php echo @$dataProfile['username']; ?>">
                </div>
                <div class="form-group">
                  <label>Password:</label>
                  <input type="password" class="form-control" placeholder="Enter password" name='password'>
                </div>
                <div class="form-group">
                  <label>Confirm Password:</label>
                  <input type="password" class="form-control" placeholder="Enter password" name='confirmPassword'>
                </div>
                <div class="form-group">
                  <label>Upload File:</label>
                  <input type="file" class="form-control" placeholder="Upload File" name='file'>
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-default" value="submit">
                </div>
              </form>
            </div>
            
            <div class="col-lg-1">
            </div>
          
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
</div>
