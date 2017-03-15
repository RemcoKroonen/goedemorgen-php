<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Goede</title>
</head>
<body>
	<?php
	date_default_timezone_set('Europe/Amsterdam');

	$time = date("H: i");
	
	//$datum = ("")
	if ($time < 12) {
		# code...
		echo "$time";
		echo "goede morgen";
		echo '<link rel="image" type="text/css" href="img/morning.png"></head>';
		
		
	}
	elseif (12 < 18) {
		# code...
		echo "$time";
		echo "goede middag";
	}
	elseif (18 < 0) {
		# code...
		echo "$time";
		echo "goede avond";
	}
	elseif (0 < 6) {
		# code...
		echo "$time";
		echo "goede nacht";
	}





	?>


</body>
</html>