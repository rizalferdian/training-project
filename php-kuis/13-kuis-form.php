<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="13-kuis-prosses.php">

		<?php
		for ($i=1; $i <= 10; $i++) {
			echo "<label>" . $i . "</label>";
			echo '<input type="text" name="nilai[]">';
			echo "<br>";
		}
		?>
		<input type="submit">

	</form>
</body>
</html>