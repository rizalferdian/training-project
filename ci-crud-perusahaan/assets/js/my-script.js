$(function() {
  /* global $ */
  var meja;
  var tombol;
  
  function reloadTable(){
    meja.ajax.reload( null, false );
  }

  /* global $confirm */
  $(document).on('click', '.hapus', function(event) {
    event.preventDefault();
    $confirm = confirm("Are you sure ?");
    if($confirm){ 
      var url = $(this).attr("href");
      $.get(url, function(){
        reloadTable();
      });
    }
  });

  $(document).on("click", "a.update", function(e) {
    e.preventDefault();
    tombol = "tambah";

    // do lots of stuff
    var nilai = $(this).closest('tr').children().html();
    $.get("<?php echo base_url($this->router->fetch_class() . '/form'); ?>/" + nilai, function(msg){
      $("#modal-body").html(msg);
      $('#myModal').modal('show');
    });
  });
  
  $(document).ready(function() {
    meja = $('#dataTables-example').DataTable( {
      "ajax": "<?php echo base_url($this->router->fetch_class() . '/data'); ?>"
    });
  });
   
  
  $(document).on("click", "a.tambah", function(event) {
    event.preventDefault();
    tombol = "tambah";

    // do lots of stuff
    var nilai = $(this).closest('tr').children().html();
    $.get("<?php echo base_url($this->router->fetch_class() . '/form'); ?>", function(msg){
      $("#modal-body").html(msg);
      $('#myModal').modal('show');
    });
  });
  
  $(document).on("submit", "#myform", function(event) {
    event.preventDefault();
    var form = $(this);
    $.post(form.attr('action') , form.serialize(), function(msg){
      $('#myModal').modal('hide');
      $("#alert-body").html(msg);
      setTimeout(function(){ 
        $('#myAlert').modal('show'); 
        setTimeout(function () {
         $('#tutup').focus();
        }, 500);
      }, 500);
      reloadTable();
      setTimeout(function(){ 
      if(tombol == "tambah") {
        meja.page( 'last' ).draw( 'page' );
      }
      }, 500);
    });
  });
  
  $(document).on("submit", "#formlogin", function(event) {
    event.preventDefault();
    $("#alert").slideUp( 300 );
    var form = $(this);
    $.post(form.attr('action') , form.serialize(), function(msg){
      msg = jQuery.parseJSON( msg );
      if(msg[0] == true){
        window.location.replace(msg[1]); 
      } else {
        $("#alert-body").html(msg[1]);
        $('#myAlert').modal('show');
        setTimeout(function () {
         $('#tutup').focus();
        }, 500);
      }
    });
  });
}