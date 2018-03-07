
<!DOCTYPE html>
<html>

<head>
	<title>test</title>
	<meta charset="UTF-8">

	<style>
		body {
			margin: 0;
			background-color: purple;
		}

		.round {
			font-family: "Arial Rounded MT Bold";
			font-size: 40px;
			color: white;
		}

	</style>
</head>

<body>

<div class="round">

	<?php

		$letter = $_GET['letter'];

		$table = ['a', 'b', 'c', 'd', 'e'];

		$tableLength = count($table, COUNT_RECURSIVE);

		for (($i = 0); $i < $tableLength ; $i++) {

			if($letter != $table[$i] ) {
				echo $table[$i];
			}else{
				echo $table[$i];
				break;
			}

		}
	?>

</div>

</body>
</html>

<!-- 			if($letter != $table[$i] ) {
				echo $table[$i];
			}else{
				echo $table[$i];
				break;
			} -->