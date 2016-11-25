if (window.jQuery) {  

	console.log("Yeah!");
} else {

	console.log("Doesn't Work");
}

// cara baru
$(document).on('click', '.hapus', function(event) {
	event.preventDefault();

	var con = confirm("Apakah anda yakin ?");
	if(con){
		var href = $(this).attr('href');
		console.log(href);
		$.get(href);

		//load ulang
		var href = "proses-home.php?q=";
		var value = $("#search").val();
		$("table").load(href+value);
	}
});

$(document).on('keyup', '#search', function() {
	//load ulang
	var href = "proses-home.php?q=";
	var value = $(this).val();
	$("table").load(href+value);
});

$(document).ready(function() {
	var href = "proses-home.php";
	$("table").load(href);
});

// login
$(document).on('submit', '#formLogin', function(event) {
	event.preventDefault();

	var form = $(this);
	var url = form.attr('action');
	$.post(url, form.serialize(), function(msg) {
		if(msg == 'true'){
			window.location.replace('home.php');
		} else {
			alert(msg);
		}
	});
})



