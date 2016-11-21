
<div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-sidebar">
    <?php 
    $menu = ['dashboard', 'siswa', 'guru', 'kelas', 'mapel', 'nilai'];
    foreach($menu as $value){
      ?>
    <li <?php if($this->router->fetch_class() == $value){echo " class='active'";} ?> ><a href="<?php echo base_url($value); ?>"><?php echo $value ?></a></li>
      <?php
    }
    ?>
  </ul>
</div>
