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
		echo "<style>body{background-image: url('img/night.png');}</style>";
	}
	elseif ($time < 12) {
		# code...
		echo "Het is nu: $time <br> goede morgen!";
		//echo "goede morgen!";
		echo "<style>body{background-image: url('img/morning.png');}</style>";
		
		
	}
	elseif ($time < 18) {
		# code...
		echo "Het is nu: $time <br> goede middag!";
		echo "<style>body{background-image: url('img/afternoon.png');}</style>";
		//echo "goede middag!";
	}
	else {
		# code...
		echo "Het is nu: $time <br> goede avond!";
		echo "<style>body{background-image: url('img/evening.png');}</style>";
		//echo "goede avond!";
	}




	?>


</body>
</html>