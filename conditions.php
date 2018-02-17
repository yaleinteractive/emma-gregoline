<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
<style>
	.container{
		background-color: grey;
		position: absolute;
		width: 100%;
		height: 100%;
		top: 0;
		left: 0;
	}

	.red{
		background-color: red;
	}

	.blue{
		background-color: blue;
	}

</style>

</head>


<body>

	<?php

	$number = $_GET['number'];
	// $number = null;


	if (is_numeric($number)){
		if($number <= 10){
			//turn the page blue
			echo '<div class="container blue">';
		}else if ($number > 10){
			echo '<div class="container red">';
		}
	} else {
		echo '<div class="container">';
	}

	?>

	Hello Goodbye.
</div>

</body>
</html>


<!-- while ($counter <= $number) {
  echo "$letter ";
  $counter++;
  system(escapeshellcmd("say $letter"));
  flush();
} -->


<!-- 	$condition = true;
	$condition2 = true;
	$numb1 = 4;
	$numb2 = 6;

	if($numb1 > $numb2 ==$condition){
	//run this	
		echo "some text";
		if($condition2){
			echo " new text";
		}
	} else if($condition){
		echo " another word";
	} else{
		echo "another another word";
	}
 -->
