<!DOCTYPE html>

<html lang="en" hc="delumine-noimg force_text">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <link href="<?php echo base_url('assets'); ?>/Login_files/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url('assets'); ?>/Login_files/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="<?php echo base_url('assets'); ?>/Login_files/signin.css" rel="stylesheet">

    <script src="<?php echo base_url('assets'); ?>/Login_files/ie-emulation-modes-warning.js.download"></script>
  </head> 

  <body>
    <div id="deluminate_fullscreen_workaround" style="background: white; position: absolute; top: 0px; left: 0px; width: 1366px; height: 638px; display: block; z-index: -2147483648;"></div>
    <div class="container">

      <form class="form-signin" action="<?php echo base_url('Login/act_login'); ?>" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <?php echo $this->session->flashdata('alert_msg'); ?>

        <label for="username" class="sr-only">Username</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url('assets'); ?>/Login_files/ie10-viewport-bug-workaround.js.download"></script>


  </body></html>