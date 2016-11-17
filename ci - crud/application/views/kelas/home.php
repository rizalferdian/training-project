<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <?php echo $this->session->flashdata('alert_msg'); ?>
  <h1 class="page-header"><?php echo $judul; ?></h1>
  <div class="table-responsive">
    <a href="<?php echo base_url("kelas/add"); ?>" class="btn btn-primary"> Tambah kelas </a>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($data_kelas as $value) { ?>
        <tr>
          <td><?php echo $value->id_kelas; ?></td>
          <td><?php echo $value->nama_kelas; ?></td>
          <td>
          <a href="<?php echo base_url('kelas/edit') . "/" . $value->id_kelas; ?>" class="btn btn-info">Edit</a>
          <a href="<?php echo base_url('kelas/delete') . "/" . $value->id_kelas; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda Yakin ?');">Hapus</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>