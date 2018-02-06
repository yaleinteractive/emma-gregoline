<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>



Hello

<?php

$name = $_GET['name'];
$lastName = $_GET['lastname'];
$counter = $_GET[number];

echo $name . " " . $lastName;

while($counter <= 100){
	echo "hello ";
	$counter ++;
}

?>


</body>
</html>


<!-- while ($counter <= $number) {
  echo "$letter ";
  $counter++;
  system(escapeshellcmd("say $letter"));
  flush();
} -->