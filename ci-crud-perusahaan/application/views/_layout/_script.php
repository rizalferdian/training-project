<!-- jQuery -->
<script src="<?php echo base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url('assets'); ?>/vendor/metisMenu/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="<?php echo base_url('assets'); ?>/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendor/datatables-responsive/dataTables.responsive.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url('assets'); ?>/dist/js/sb-admin-2.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
  /* global $ */
  var meja;
  var tombol;
  
  function reloadTable(){
    meja.ajax.reload( null, false );
  }
  
  /* table */
  $(document).ready(function() {
    meja = $('#dataTables-example').DataTable( {
      "ajax": "<?php echo base_url($this->router->fetch_class() . '/data'); ?>"
    });
  });
  
  
  /* alert */
  $(document).ready(function() {
    var html = $("#alert-body").html();
    if(html){
        $('#myAlert').modal('show'); 
        setTimeout(function () {
         $('#tutupAlert').focus();
        }, 500);
    }
  });
  
  /* tombol tambah */
  $(document).on("click", "a.tambah", function(event) {
    event.preventDefault();
    tombol = "tambah";

    var nilai = $(this).closest('tr').children().html();
    $.get("<?php echo base_url($this->router->fetch_class() . '/form'); ?>", function(msg){
      $("#modal-body").html(msg);
      $('#myModal').modal('show');
    });
  });
  
  /* tombol update*/
  $(document).on("click", "a.update", function(e) {
    e.preventDefault();

    var nilai = $(this).closest('tr').children().html();
    $.get("<?php echo base_url($this->router->fetch_class() . '/form'); ?>/" + nilai, function(msg){
      $("#modal-body").html(msg);
      $('#myModal').modal('show');
    });
  });

  /* tombol hapus */
  $(document).on('click', 'a.hapus', function(event) {
    event.preventDefault();
    // confirm
    $confirm = confirm("Apakah anda yakin ?");
    if($confirm){ 
      var url = $(this).attr("href");
      $.get(url, function(){
        reloadTable();
      });
    }
  });
  
  /* tombol import */
  $(document).on("click", "a.import", function(event) {
    event.preventDefault();
    $("#submit").attr("form", "form_import");
    tombol = "import";

    var nilai = $(this).closest('tr').children().html();
    $.get("<?php echo base_url($this->router->fetch_class() . '/form_import'); ?>", function(msg){
      $("#modal-body").html(msg);
      $('#myModal').modal('show');
    });
  });
  
  /* tombol alert */
  $(document).on("click", "#tutupAlert", function(event){
    if(tombol == "tambah") {
      $('#myModal').modal('show');
    }
  });

  /* form */
  $(document).on("submit", "#myform", function(event) {
    $("#submit").attr("form", "myform");
    if(tombol == "import"){
      return true;
    }
    
    event.preventDefault();
    
    var form = $(this);
    $.post(form.attr('action') , form.serialize(), function(msg){
      $('#myModal').modal('hide');
      $("#alert-body").html(msg);
      setTimeout(function(){ 
        $('#myAlert').modal('show'); 
        setTimeout(function () {
         $('#tutupAlert').focus();
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
  
  /* login */
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
         $('#tutupAlert').focus();
        }, 500);
      }
    });
  });
  
</script>

