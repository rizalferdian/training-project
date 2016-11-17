<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <?php echo $this->session->flashdata('alert_msg'); ?>
  <h1 class="page-header"><?php echo $judul; ?></h1>
  <form class="form-horizontal" method="post" action="<?php echo base_url("nilai/act_add"); ?>">
    <div class="form-group">
      <label for="id_siswa" class="col-sm-2 control-label">Nama Siswa</label>
      <div class="col-sm-10">
        <select name="id_siswa" id="id_siswa" class="form-control">
          <option value="">Pilih</option>
          <?php foreach($data_siswa as $value){ ?>
          <option value="<?php echo $value->id; ?>"><?php echo $value->nama; ?></option>
          <?php } ?>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="id_mapel" class="col-sm-2 control-label">Nama Kelas</label>
      <div class="col-sm-10">
        <select name="id_mapel" id="id_mapel" class="form-control">
          <option value="">Pilih</option>
          <?php foreach($data_mapel as $value){ ?>
          <option value="<?php echo $value->id_mapel; ?>"><?php echo $value->nama_mapel; ?></option>
          <?php } ?>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="total_nilai" class="col-sm-2 control-label">Nilai</label>
      <div class="col-sm-10">
        <input type="text" name="total_nilai" class="form-control" id="total_nilai" placeholder="Jumlah Nilai">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <a href="<?php echo base_url("nilai"); ?>" class="btn btn-default">Kembali</a>
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
    </div>
  </form>
</div>