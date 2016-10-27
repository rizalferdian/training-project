if (window.jQuery) {  

	console.log("Yeah!");
} else {

	console.log("Doesn't Work");
}

// cara baru
$(document).on('click', '.hapus', function(event) {
	event.preventDefault();
	var href = $(this).attr('href');
	console.log(href);
	$.get(href);

	//load ulang
	var href = "proses-home.php?q=";
	var value = $("#search").val();
	$("table").load(href+value);
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



