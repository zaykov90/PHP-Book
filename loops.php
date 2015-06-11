<html>
	<head>
	<title>Loops</title>
	</head>
	<body>
		<?php
			//for loop
		for($i = 0; $i < 10; $i++) {
			echo $i . " ";
		}
		echo "<br />";
			//while loop
		$i = 0;
		while($i < 10)  {
			echo $i . " ";
			$i++;
		}
		//do while loop
		echo "<br />";
		$i = 1;
		do 
			echo $i . " ";
		while($i++ < 10);

		echo "<br />";
		
		for ($j = 0; $j < 10; $j++) {
			for($k = 0; $k <= $j; $k++) {
				echo $k;
			}
			echo "<br/>";
		}

		echo "<br />";

		$i = 0;
		while($i < 10) {
			$i++;
			if($i % 2 == 0) continue;
			echo $i . " ";
		}

		echo "<br />";

		$i = 0;
		while($i < 10) {
			$i++;
			if($i % 2 == 0) break;
			echo $i . " ";
		}

		echo "<br />";

		//switch-case

		$year = 2011;
		switch($year) {
			case 2010: echo "Year = 2010\n"; break;
			case 2011: echo "Year = 2011\n"; break;
			case 2012: echo "Year = 2012\n"; break;
			case 2013: echo "Year = 2013\n"; break;
			default: echo "Unknown year\n"; break;
		}
		?>
	</body>
</html>