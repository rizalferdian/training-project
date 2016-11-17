<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <?php echo $this->session->flashdata('alert_msg'); ?>
  <h1 class="page-header"><?php echo $judul; ?></h1>
  <form class="form-horizontal" method="post" action="<?php echo base_url("mapel/act_add"); ?>">
    <div class="form-group">
      <label for="nama" class="col-sm-2 control-label">Nama</label>
      <div class="col-sm-10">
        <input type="text" name="nama_mapel" class="form-control" id="nama" placeholder="Nama">
      </div>
    </div>
    <div class="form-group">
      <label for="id_guru" class="col-sm-2 control-label">Nama Guru</label>
      <div class="col-sm-10">
        <select name="id_guru" id="id_guru" class="form-control">
          <option value="">Pilih</option>
          <?php foreach($data_guru as $value){ ?>
          <option value="<?php echo $value->id_guru; ?>"><?php echo $value->nama_guru; ?></option>
          <?php } ?>
        </select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <a href="<?php echo base_url("mapel"); ?>" class="btn btn-default">Kembali</a>
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
    </div>
  </form>
</div>