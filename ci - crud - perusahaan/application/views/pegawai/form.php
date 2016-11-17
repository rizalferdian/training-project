<!-- /.row -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">

      <div class="panel-body">
        <div class="row">
          <div class="col-lg-1">

          </div>
          <div class="col-lg-10">
            <form class="form-horizontal" action="<?php echo $form; ?>" method="post"  id="myform" >
              <input type="hidden" name='id' value="<?php echo @$dataPegawai['id']; ?>">
              <div class="form-group">
                <label>Nama Pegawai:</label>
                <input class="form-control"  placeholder="Enter text"  name='nama' value="<?php echo @$dataPegawai['nama']; ?>">
                <p class="help-block">Example Rizal Ferdian.</p>
              </div>
              <div class="form-group">
                <label>Nomor Telepon:</label>
                <input class="form-control"  placeholder="Enter number" name='telp' value="<?php echo @$dataPegawai['telp']; ?>">
                <p class="help-block">Example 081236448909.</p>
              </div>
              <div class="form-group">
                <label>Posisi Kerja:</label>
                <select name="id_posisi" id="id_posisi" class="form-control" >
                  <option disabled selected>
                    Pilih Posisi
                  </option>
                  <?php foreach($dataPosisi as $value) { ?>
                  <option value="<?= $value['id']; ?>" <?php if(@$dataPegawai['id_posisi'] == $value['id']) echo "selected"; ?>>
                    <?= $value['nama']; ?>
                  </option>
                  <?php } ?>
                </select>
                <p class="help-block">Example choose HRD.</p>
              </div>
              <div class="form-group">
                <label>Kota Asal:</label>
                <select name="id_kota" id="id_kota" class="form-control">
                  <option disabled selected>
                    Pilih Kota
                  </option>
                  <?php foreach($dataKota as $value) { ?>
                  <option value="<?php echo $value['id']; ?>" <?php if(@$dataPegawai['id_posisi'] == $value['id']) echo "selected"; ?>>
                    <?php echo $value['nama']; ?>
                  </option>
                  <?php } ?>
                </select>
                <p class="help-block">Example choose Malang.</p>
              </div>
              <div class="form-group">
                <label>Jenis Kelamin:</label>
                <div class="input-group col-sm-7">
                  <span class="input-group-addon">
                    <input type="radio" id="laki" name='id_kelamin' value="1"  <?php if(@$dataPegawai['id_kelamin'] == 1) echo "checked"; ?>>
                  </span>
                  <label for="laki" class="form-control">
                    Laki laki
                  </label>
                </div>
                <br>
                <div class="input-group col-sm-7">
                  <span class="input-group-addon">
                    <input type="radio" name='id_kelamin' id='perempuan' value="2" <?php if(@$dataPegawai['id_kelamin'] == 2) echo "checked"; ?>>
                  </span>
                  <label for="perempuan" class="form-control">
                    Perempuan
                  </label>
                </div>
                <p class="help-block">Example choose Laki - Laki.</p>
              </div>
            </form>
          </div>
          <div class="col-lg-1">

          </div>         
        </div>
        <!-- /.row (nested) -->
      </div>
      <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
