<!DOCTYPE html>	
<html lang="en">
	<head>
		<title>Homework 2, Challenge 2: Coin Toss</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<h1>Coin Toss</h1>
		<?php
			for ($x = 1; $x <= 9; $x = $x + 2) {
				echo "<h3>Flipping $x coins:</h3>";
				coin_toss($x);
				echo "<br>";
			}
		?>
		<h2>Heads Flipper</h2>
		<form action="hw2_ch2.php" method="get">
			How many heads in a row do you want to flip? <input type="text" name="heads">
			<input type="submit" value="Flip">
		</form>
		<?php
			$heads =  $_GET["heads"];
			heads_toss($heads);
			function coin_toss($num_toss) {
				for ($t = 0; $t < $num_toss; $t++) {
					$toss = mt_rand(0, 1);
					if ($toss == 0) {
						echo "<img src=\"images/heads.jpg\" alt=\"Heads\" style=\"width:80px;height:80px;\"> ";
					}
					else {
						echo "<img src=\"images/tails.jpg\" alt=\"Tails\" style=\"width:80px;height:80px;\"> ";
					}
				}
			}
			function heads_toss($heads) {		
				for ($t = 0; $t != $heads; $t) {
					$toss = mt_rand(0, 1);
					if ($toss == 0) {
						$t++;
					}
					else {
						$t = $t * 0;
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
