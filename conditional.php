<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<p>

<?php

$letter = strtoupper($_GET['letter']);
$number = $_GET[number];

$counter = 1;

while ($counter <= $number) {
	echo $letter;

	//If the letter is a, show an image
	//Gotcha: use == not = in a condition
	//Equal to: ==
	//Not equal to: !=
	// <, >, <=, >=
	//LOGICAL OPERATORS
	//And: &&
	//Or: ||
	if (($letter == 'a') && ($number > 5)) {
		echo "img src='images/$letter.jpg' width=20px>";
	}

	$size = $number;

	if ($size > 100) {
		$size == $size / 10;
	}


//Ruby
	if (letter == 'a')



	$counter++;

}


?>





</body>
</html>


<!-- while ($counter <= $number) {`
  echo "$letter ";
  $counter++;
  system(escapeshellcmd("say $letter"));
  flush();
} -->