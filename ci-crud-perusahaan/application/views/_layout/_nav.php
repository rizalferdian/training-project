<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo base_url('home'); ?>">SB Admin v2.0</a>
  </div>
  <!-- /.navbar-header -->

  <ul class="nav navbar-top-links navbar-right">
    <!-- /.dropdown -->
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="fa fa-user fa-fw"></i>
        <?php echo $this->session->userdata("username"); ?> 
        <i class="fa fa-caret-down"></i>
      </a>
      <ul class="dropdown-menu dropdown-user">
        <li>
          <a href="<?php echo base_url('profile'); ?>">
            <i class="fa fa-user fa-fw"></i> 
            User Profile
          </a>
        </li>
        <li class="divider"></li>
        <li>
          <a href="<?php echo base_url('auth/logout'); ?>">
            <i class="fa fa-sign-out fa-fw"></i> 
            Logout
          </a>
        </li>
      </ul>
      <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->
  </ul>
  <!-- /.navbar-top-links -->

  <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
      <ul class="nav" id="side-menu">
        <li>
          <a href="<?php echo base_url('home'); ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
        </li>
        <li>
          <a href="#"><i class="fa fa-table fa-fw"></i> Tables<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <li>
              <a href="<?php echo base_url('pegawai'); ?>">Pegawai</a>
            </li>
            <li>
              <a href="<?php echo base_url('posisi'); ?>">Posisi</a>
            </li>
            <li>
              <a href="<?php echo base_url('kota'); ?>">Kota</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.sidebar-collapse -->
  </div>
  <!-- /.navbar-static-side -->
</nav>
