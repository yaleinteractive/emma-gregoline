<!DOCTYPE html>
<html>

<head>
	<title>Shadow</title>
	<meta charset="UTF-8">
	<style>
	    body {
	      margin: 0;
	      background-color: yellow;
	      overflow: hidden;
	    }


	    p {
	        font-size: 50pt;
	        line-height: 50px;
	        font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
	        color: transparent;
	        display: inline-block;
	    }
		</style>
	</head>
<body>

<?php

	$number = $_GET['number'];
	$word = $_GET['word'];
	$counter = 1;

	do {
		$randIntA = rand(1,$number);
		$randIntB = rand(1,$number);
		$randIntC = rand(1,$number);
		$randColorA = rand(0,255);
		$randColorB = rand(0,255);
		$randColorC = rand(0,255);

		
		echo '<p class="shadow" style="text-shadow: ' . $randIntA . 'px ' . $randIntB . 'px ' . $randIntC . 'px rgb(' . $randColorA . ',' . $randColorB . ',' . $randColorC . ');">' . $word . ' ';
		$counter++;
	} while ($counter <= $number);
?>
</p>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

$( document ).ready(function() {
    window.onClick(location.href = window.location.href);
});
	
</script>

</body>
</html>

