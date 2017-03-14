<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Goede</title>
</head>
<body>
	<?php
	date_default_timezone_set('Europe/Amsterdam');

	$time = date("H: i: s");
	//$datum = ("")
	echo "$time";
	if ($time < 12) {
		# code...
		echo "goede morgen";
	}
	elseif (12 < 18) {
		# code...
		echo "goede middag";
	}
	elseif (18 < 0) {
		# code...
		echo "goede avond";
	}
	elseif (0 < 6) {
		# code...
		echo "goede nacht";
	}





	?>


</body>
</html>