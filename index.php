<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Goede</title>
	<link rel="stylesheet" type="text/css" href="goede.css">
</head>
<body>
		<?php
		date_default_timezone_set('Europe/Amsterdam');

		$time = date("H:i");
	//los css bestand
	//$datum = ("")
		if ($time < 6) {
		# code...
			echo  "<h1>Het is nu: $time</h1><p>goede nacht!</p>";
			//echo "goede nacht!";
			echo "<style>body{background-image: url('img/night.png');}</style>";
		}
		elseif ($time < 12) {
		# code...
			echo "<h1>Het is nu: $time</h1><p>goede morgen!</p>";
			//echo "goede morgen!";
			echo "<style>body{background-image: url('img/morning.png');}</style>";


		}
		elseif ($time < 18) {
		# code...
			echo "<h1>goede middag!</h1><p>Het is nu: $time</p>";
			echo "<style>body{background-image: url('img/afternoon.png');}</style>";
			//echo "";
		}
		else {
		# code...
			echo "<h1>Het is nu: $time</h1><p>goede avond!</p>";
			echo "<style>body{background-image: url('img/evening.png');}</style>";
			//echo "goede avond!";
		}
		?>
</body>
</html>