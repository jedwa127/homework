<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Homework 3, Challenge 1: Book Lists</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="hw3_ch1_style.css">
	</head>
	<body>
		<div>
			<table>
				<?php
					$books = array(array("title" => "PHP and MySQL Web Development", "author" => "Luke Welling", "pages" => "144", "format" => "Paperback", "price" => "31.63"),
								   array("title" => "Web Design with HTML, CSS, JavaScript and jQuery", "author" => "Jon Duckett", "pages" => "135", "format" => "Paperback", "price" => "41.23"),
								   array("title" => "PHP Cookbook: Solutions & Examples for PHP Programmers", "author" => "David Sklar", "pages" => "14", "format" => "Paperback", "price" => "40.88"),
								   array("title" => "JavaScript and JQuery: Interactive Front-End Web Development", "author" => "Jon Duckett", "pages" => "251", "format" => "Paperback", "price" => "22.09"),
								   array("title" => "Modern PHP: New Features and Good Practices", "author" => "Josh Lockhart", "pages" => "7", "format" => "Paperback", "price" => "28.49"),
								   array("title" => "Programming PHP", "author" => "Kevin Tatroe", "pages" => "26", "format" => "Paperback", "price" => "28.96"));
					echo "<tr>";
					foreach (array_keys($books[0]) as $k) {
						echo "<th>" . ucfirst($k) . "</th>";
					}
					echo "</tr>";
					foreach ($books as $b) {
						echo "<tr>";
						foreach ($b as $k => $v) {
							echo "<td>";
							if ($k == "price") {
								echo "$";
							}
							if ($k == "title") {
								echo "<a href=\"https://www.google.com/search?q=" . urlencode($v) . "\">$v</a>";
							}
							else {
								echo "$v</td>";
							}
						}
						echo "</tr>";
					}
				?>
			</table>
		</div>
		<div>
			<?php
				echo "Total price: $" . mda_array_sum($books, "price");
				function mda_array_sum($mda_array, $key) {
					foreach($mda_array as $a) {
						$sum += $a[$key];
					}
					return $sum;
				}
			?>
		</div>
	</body>
</html>
