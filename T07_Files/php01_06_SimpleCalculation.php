<html>
	<head>
		<title>Simple Calculations</title>
	</head>

	<body>
	<?php

		$a = 3;
		$b = 8;
		$c = "8";
		echo ($a + $b);
		echo "<br>------------------------------<br>";

		echo ($b % $a) ;
		echo "<br>------------------------------<br>";

		echo ($b == $c); // Content is the same
		echo "<br>-------------------------------<br>";

		print ($b === $c);  // Type is different
		echo "<br>-------------------------------<br>";

	?>

	</body>
</html>