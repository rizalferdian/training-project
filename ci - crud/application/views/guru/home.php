<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <?php echo $this->session->flashdata('alert_msg'); ?>
  <h1 class="page-header"><?php echo $judul; ?></h1>
  <div class="table-responsive">
    <a href="<?php echo base_url("guru/add"); ?>" class="btn btn-primary"> Tambah guru </a>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($data_guru as $value) { ?>
        <tr>
          <td><?php echo $value->id_guru; ?></td>
          <td><?php echo $value->nama_guru; ?></td>
          <td>
          <a href="<?php echo base_url('guru/edit') . "/" . $value->id_guru; ?>" class="btn btn-info">Edit</a>
          <a href="<?php echo base_url('guru/delete') . "/" . $value->id_guru; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda Yakin ?');">Hapus</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>