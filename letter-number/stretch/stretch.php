
<!DOCTYPE html>
<html>

<head>
	<title>test</title>
	<meta charset="UTF-8">

	<style>
		body{
			margin: 0;
			background-color: black;
		}

		.container {
			display: flex;
			flex: 1;
		}

		.round {
			font-family: "Arial Rounded MT Bold";
			font-size: 40px;
			color: white;
		}

	</style>
</head>

<body>

<div class="container">

	<?php

		$letter = $_GET['letter'];
		$number = $_GET[number];
		$counter = 1;

		if ($counter <= $number) {
			echo '<p class="round" style="transform:scaleY(' . $number . ')">' . $letter;	
		}

		$counter++;
	?>

	</p>

</div>

</body>
</html>