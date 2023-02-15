<!DOCTYPE html>
<html>
	<head>
		<title>Homework 1, Challenge 2: 99 Bottles of Beer</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
			for ($bottles = 99 ; $bottles >= 1 ; $bottles) { // Changing value of $bottles will change number of song verses accordingly
				if ($bottles > 1) {
					echo $bottles . " bottles of beer on the wall, " . $bottles . " bottles of beer.<br>Take one down, pass it around, " . --$bottles . " bottles of beer on the wall.<br>"; // Decrementing $bottles at this location as opposed to in the modification statement of the for loops prints lyrics correctly
				}
				elseif ($bottles > 0) {
					echo $bottles . " bottles of beer on the wall, " . $bottles . " bottles of beer.<br>Take one down, pass it around, no more bottles of beer on the wall."; // Prints final line of song differently
					break; // Terminate program to prevent infinite loop at $bottles value of 1
				}
			}
		?>
	</body>
</html>
