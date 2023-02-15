<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Homework 2, Challenge 1: ISBN Validation</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<h1>ISBN-10 Validator</h1>
		<form action="hw2_ch1.php" method="get">
			Enter an ISBN-10: <input type="text" name="isbn">
			<input type="submit" value="Validate">
		</form>
		<?php
//			Test ISBNs: 0151003084, 076495508X
			$isbn =  $_GET["isbn"];
			isbn_valid($isbn);
			function isbn_valid($isbn) {
				if (substr($isbn, 9, 1) == "X") {	
					$isbn = str_replace("X", "10", $isbn);
				}
				if (strlen($isbn) == 0) {
					echo "";
				}
				elseif ((strlen($isbn) > 11) or (strlen($isbn) < 10) or (intval($isbn) != $isbn)) {
					echo "$isbn is not a valid ISBN-10.";
				}
				elseif (isbn_calc($isbn) == TRUE) {
					if (substr($isbn, 9, 2) == "10") {	
						$isbn = str_replace("10", "X", $isbn);
					}
					echo "$isbn is a valid ISBN-10.<br>";
					echo "<a href='https://isbnsearch.org/isbn/$isbn'>View this title on ISBN Search.</a>";
				}
				else {
					echo "$isbn is not a valid ISBN-10.";
				}
			}
			function isbn_calc($isbn) {
				if (substr($isbn, 9, 1) == "X") {	
					$isbn = str_replace("X", "10", $isbn);
				}
				for ($x = 10; $x > 0; $x--) {
					$n = substr($isbn, (10 - $x), floor((1 / $x) + 1)) * $x;
					$n_total[] = $n;
				}
				if (array_sum($n_total) % 11 == 0) {
					return TRUE;
				}
			}
		?>
	</body>
</html>
