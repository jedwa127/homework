<!DOCTYPE html>
<html>
	<head>
		<title>Homework 1, Challenge 1: Correct Change</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
			$change = 786.87; // Amount of change due back
			echo "You are due back $change cents in change.<br>";
				if ($change < 0) { // Checks if $change is a negative number
					exit("You can't recieve negative change, that's just paying someone I guess."); // Exit program and print if $change is a negative number
				}
				if (intval($change) != $change) { // Checks if $change is an integer or a floating point number by comparing integer value of $change with original value of $change
					echo "There aren't any coins worth less than one cent anymore so it looks like you're getting stiffed.<br>"; // Prints if $change is a floating point number
				}
				else {
					echo ""; // Prints if $change is an integer
				}
			echo "You will recieve:<br>";			
			$change = (int) $change; // Sets $change to integer value of original input to sanitize floating-point change numbers
			$dollars = $change / 100; // Calculates amount divisible by 100
			$dollars = (int) $dollars; // Takes only integer from previous calculation
				if ($dollars > 1) { // Correctly pluralizes denomination or skips printing if none of that denomination is received
					echo $dollars . " dollars.<br>";
				}
				elseif ($dollars < 1) {
					echo "";
				}
				else {
					echo $dollars . " dollar.<br>";
				}
			$quarters = ($change - ($dollars * 100)) / 25; // Calculates remainder divisible by 25
			$quarters = (int) $quarters; // Takes only integer from previous calculation
				if ($quarters > 1) { // Correctly pluralizes denomination or skips printing if none of that denomination is received
					echo $quarters . " quarters.<br>";
				}
				elseif ($quarters < 1) {
					echo "";
				}
				else {
					echo $quarters . " quarter.<br>";
				}
			$dimes = ($change - (($dollars * 100) + ($quarters * 25))) / 10; // Calculates remainder divisible by 10
			$dimes = (int) $dimes; // Takes only integer from previous calculation
				if ($dimes > 1) { // Correctly pluralizes denomination or skips printing if none of that denomination is received
					echo $dimes . " dimes.<br>";
				}
				elseif ($dimes < 1) {
					echo "";
				}
				else {
					echo $dimes . " dime.<br>";
				}
			$nickels = ($change - (($dollars * 100) + ($quarters * 25) + ($dimes * 10))) / 5; // Calculates remainder divisible by 5
			$nickels = (int) $nickels; // Takes only integer from previous calculation
				if ($nickels > 1) { // Correctly pluralizes denomination or skips printing if none of that denomination is received
					echo $nickels . " nickels.<br>";
				}
				elseif ($nickels < 1) {
					echo "";
				}
				else {
					echo $nickels . " nickel.<br>";
				}
			$pennies = $change - (($dollars * 100) + ($quarters * 25) + ($dimes * 10) + ($nickels *5)); // Calculates remainder
				if ($pennies > 1) { // Correctly pluralizes denomination or skips printing if none of that denomination is received
					echo $pennies . " pennies.";
				}
				elseif ($pennies < 1) {
					echo "";
				}
				else {
					echo $pennies . " penny.";
				}
		?>
	</body>
</html>
