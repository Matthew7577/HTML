<html>
	<head>
		<title>More Calculations</title>
	</head>

	<body>
	<?php

		$a = 3;
		$b = 8;
		$c = 9;
		$d = 20;
		$str1 = "SEHH1016 ";
		$str2 = "Introduction to Internet Technology";

		echo ($a);
		echo "<br>--------------------------------------<br>";

			$b = $a;
		echo ($b);
		echo "<br>--------------------------------------<br>";

			$c += 1;  // same as $c = $c + 1;
		echo ($c); 
		echo "<br>--------------------------------------<br>";

			$c *= $d; // same as $c = $c * $d;
		echo ($c); 
		echo "<br>--------------------------------------<br>";

			$str1 .= $str2; // same as $str1 = $str1 . $str2;
		echo ($str1); 
		echo "<br>--------------------------------------<br>";

	?>

	</body>
</html>