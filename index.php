<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<!-- <?php
	$name = "Veronica";
	$lastName = "Smith";	
	$table = ["veronica", "varonica"]
?>

<p>hello 
	<?php 
		echo $name . " " . $lastName;
	?> 
</p> -->


Hello

<?php

$name = "Veronica";
$lastName = $_GET['lastname'];
$counter = 1;

echo $name . " " . $lastName;

?>


</body>
</html>




<!-- while ($counter <= $number) {
  echo "$letter ";
  $counter++;
  system(escapeshellcmd("say $letter"));
  flush();
} -->