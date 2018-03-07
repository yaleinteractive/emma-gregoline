<!DOCTYPE html>
<html>

<head>
	<title>Shadow</title>
	<meta charset="UTF-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<style>
	    body {
	      margin: 0;
	      background-color: LightGray;
	    }


	    p {
	        font-size: 50pt;
	        line-height: 50px;
	        font-family: Helvetica Neue,Helvetica,Arial,sans-serif; ;
	        color: transparent;
	        display: inline-block;
	    }

	/*    .shadow {
		    -webkit-animation-name: shadow; 
		    -webkit-animation-duration: 3s; 
		    -webkit-animation-iteration-count: infinite; 
		    animation-name: shadow;
		    animation-duration: 3s;
		    animation-iteration-count: infinite;
		}

		@-webkit-keyframes shadow {
		    0%   {text-shadow: 0px 0px 0px yellow}	
		    50%  {text-shadow: 50px 50px 50px yellow, left:30px}
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

  //each word is assigned new random shadow
  	$counter = 1;

	while ($counter <= $number) {
		echo '<p class="shadow" style="text-shadow: ' . $randIntA . 'px ' . $randIntB . 'px ' . $randIntC . 'px rgb(' . $randColorA . ',' . $randColorB . ',' . $randColorC . ');">' . $word . ' ';
   	$counter++;	
    flush();
	}


?>

</p>

</body>
</html>

