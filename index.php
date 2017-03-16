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
		echo "Het is nu: $time <br> goede nacht!";
		//echo "goede nacht!";
		echo "<img src='img/night.png'>";
	}
	elseif ($time < 12) {
		# code...
		echo "Het is nu: $time <br> goede morgen!";
		//echo "goede morgen!";
		echo "<img src='img/morning.png'>";
		
		
	}
	elseif ($time < 18) {
		# code...
		echo "Het is nu: $time <br> goede middag!";
		echo "<img src='img/afternoon.png'>";
		//echo "goede middag!";
	}
	else {
		# code...
		echo "Het is nu: $time <br> goede avond!";
		echo "<img src='img/evening.png'>";
		//echo "goede avond!";
	}




	?>


</body>
</html>