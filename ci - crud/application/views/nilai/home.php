<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <?php echo $this->session->flashdata('alert_msg'); ?>
  <h1 class="page-header"><?php echo $judul; ?></h1>
  <div class="table-responsive">
    <a href="<?php echo base_url("nilai/add"); ?>" class="btn btn-primary"> Tambah Nilai </a>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Siswa</th>
          <th>Mata Pelajaran</th>
          <th>Nilai</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($data_nilai as $value) { ?>
        <tr>
          <td><?php echo $value->id_nilai; ?></td>
          <td><?php echo $value->nama_siswa; ?></td>
          <td><?php echo $value->nama_mapel; ?></td>
          <td><?php echo $value->total_nilai; ?></td>
          <td>
          <a href="<?php echo base_url('nilai/edit') . "/" . $value->id_nilai; ?>" class="btn btn-info">Edit</a>
          <a href="<?php echo base_url('nilai/delete') . "/" . $value->id_nilai; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda Yakin ?');">Hapus</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>