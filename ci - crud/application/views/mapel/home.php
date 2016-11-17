<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <?php echo $this->session->flashdata('alert_msg'); ?>
  <h1 class="page-header"><?php echo $judul; ?></h1>
  <div class="table-responsive">
    <a href="<?php echo base_url("mapel/add"); ?>" class="btn btn-primary"> Tambah Mapel </a>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Mapel</th>
          <th>Nama Guru</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($data_mapel as $value) { ?>
        <tr>
          <td><?php echo $value->id_mapel; ?></td>
          <td><?php echo $value->nama_mapel; ?></td>
          <td><?php echo $value->nama_guru; ?></td>
          <td>
          <a href="<?php echo base_url('mapel/edit') . "/" . $value->id_mapel; ?>" class="btn btn-info">Edit</a>
          <a href="<?php echo base_url('mapel/delete') . "/" . $value->id_mapel; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda Yakin ?');">Hapus</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>