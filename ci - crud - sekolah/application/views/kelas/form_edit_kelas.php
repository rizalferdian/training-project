<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <?php echo $this->session->flashdata('alert_msg'); ?>
  <h1 class="page-header"><?php echo $judul; ?></h1>
  <form class="form-horizontal" method="post" action="<?php echo base_url("kelas/act_edit"); ?>">
    <div class="form-group">
      <label for="nama_kelas" class="col-sm-2 control-label">Nama</label>
      <div class="col-sm-10">
          <input type="hidden" name="id_kelas" readonly class="form-control" value="<?php echo $data_kelas->id_kelas; ?>">
        <input type="text" name="nama_kelas" class="form-control" id="nama_kelas" placeholder="nama_kelas" value="<?php echo $data_kelas->nama_kelas; ?>">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <a href="<?php echo base_url("kelas"); ?>" class="btn btn-default">Kembali</a>
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
    </div>
  </form>
</div>