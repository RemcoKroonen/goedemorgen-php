<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Goede</title>
</head>
<body>
	<?php
	date_default_timezone_set('Europe/Amsterdam');

	$time = date("H:i");
	
	//$datum = ("")
	if ($time < 6) {
		# code...
		echo "Het is nu: $time";
		echo "goede nacht";
	}
	elseif ($time < 12) {
		# code...
		echo "Het is nu: $time";
		echo "goede morgen";
		echo '<link rel="image" type="text/css" href="img/morning.png"></head>';
		
		
	}
	elseif ($time < 18) {
		# code...
		echo "Het is nu: $time";
		echo "goede middag";
	}
	else {
		# code...
		echo "Het is nu: $time";
		echo "goede avond";
	}
	/*if ($time < 6) {
		# code...
		echo "$time";
		echo "goede nacht";
	}*/





	?>


</body>
</html>