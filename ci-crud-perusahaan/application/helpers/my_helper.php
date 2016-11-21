<?php
function succ_msg($value)
{
  $str = '<div class="alert alert-success" role="alert">Berhasil, ' . $value . '</div>';
  return $str;
}

function err_msg($value)
{
  $str = '<div class="alert alert-danger" role="alert">Gagal, ' . $value . '</div>';
  return $str;
}

function modal()
{
  ?>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Form Table</h4>
        </div>
        <div class="modal-body" id="modal-body"></div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" form="myform">Submit Button</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <?php
}

function alert()
{
  ?>
  <div class="modal fade" id="myAlert" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Alert Information</h4>
        </div>
        <div class="modal-body" id="alert-body"></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default tutup" data-dismiss="modal" id="tutup">Close</button>
        </div>
      </div>
    </div>
  </div>
  <?php
}
?>
