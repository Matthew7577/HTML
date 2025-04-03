<html>
	<body>

	<?php 
	   $cmarks = $_REQUEST["coursework_marks"];
	   $emarks = $_REQUEST["exam_marks"];
	?>

	<table border = "1" width = "50%">
		<tr>
		<td>The coursework marks:</td> 
		<td><?php echo $cmarks ?></td>
		</tr>
		<tr>
		<td>The exam marks:</td> 
		<td><?php echo $emarks ?></td>
		</tr>
	</table>

	<?php
		if ($cmarks >= 50 && $emarks >= 40)
		   echo "Passed!";
		else
		   echo "Failed!";
	?>

	</body>
</html>