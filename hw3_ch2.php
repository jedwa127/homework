<!DOCTYPE html>	
<html lang="en">
	<head>
		<title>Homework 3, Challenge 2: Coin Toss, Part 2</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<h1>Heads Flipper</h1>
		<form action="hw3_ch2.php" method="get">
			How many heads in a row do you want to flip? <input type="text" name="heads">
			<input type="submit" value="Flip">
		</form>
		<?php
			$heads =  $_GET["heads"];
			if ($heads > 10) {
				echo "Too big.";
			}
			else {
				heads_toss($heads);
			}
			function heads_toss($heads) {		
				for ($t = 0; $t != $heads; $t) {
					$toss = mt_rand(0, 1);
					if ($toss == 0) {
						$t++;
					}
					else {
						$t *= 0;
					}
					$toss_total[] = $toss;
				}
				echo "<h3>Flipped $heads heads in a row in " . count($toss_total) . " flips:</h3>";
				foreach($toss_total as $t) {
					if ($t == 0) {
						echo "<img src=\"images/heads.jpg\" alt=\"Heads\" style=\"width:80px;height:80px;\"> ";
					}
					else {
						echo "<img src=\"images/tails.jpg\" alt=\"Tails\" style=\"width:80px;height:80px;\"> ";
					}				}
			}
		?>
	</body>
</html>
