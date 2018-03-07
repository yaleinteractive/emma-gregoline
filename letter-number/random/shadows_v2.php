<!DOCTYPE html>
<html>

<head>
  <title>Shadow</title>
  <meta charset="UTF-8">

  <style>
    body {
      margin: 0;
      background-color: #FFFACD;
    }


    p {
        font-size: 80pt;
        line-height: 40pt;
        font-family: "Arial Rounded MT Bold";
        color: transparent;
        display: inline-block;
    }
/*
    .shadow {
	    -webkit-animation-name: shadow; 
	    -webkit-animation-duration: 3s; 
	    -webkit-animation-iteration-count: infinite; 
	    animation-name: shadow;
	    animation-duration: 3s;
	    animation-iteration-count: infinite;
	}

	@-webkit-keyframes shadow {
	    0%   {text-shadow: 0px 0px 0px yellow}
	    50%  {text-shadow: 50px 50px 50px yellow}
	    100% {text-shadow: 0px 0px 0px yellow}
	}

	@keyframes shadow {
	    0%   {text-shadow: 0px 0px 0px yellow}
	    50%  {text-shadow: 50px 50px 50px yellow}
	    100% {text-shadow: 0px 0px 0px yellow}
	}*/

  </style>
</head>

<body>

<?php

	$number = $_GET['number'];
	$word = $_GET['word'];

	$randIntA = rand(1,$number);
	$randIntB = rand(1,$number);
	$randIntC = rand(1,$number);
	$randColorA = rand(0,255);
	$randColorB = rand(0,255);
	$randColorC = rand(0,255);
  	$counter = 1;

  	//each word is assigned a new random
  	while ($counter <= $number) {
		echo '<p class="shadow" style="text-shadow: ' . $randIntA . 'px ' . $randIntB . 'px ' . $randIntC . 'px rgb(' . $randColorA . ',' . $randColorB . ',' . $randColorC . ');">' . $word . ' '; 
    $counter++;	
    flush();
	}



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

