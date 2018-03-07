<html>
<head>
	<title>Calendar</title>
</head>

<body>

<?php

//Format for today's date as UUUU-MM-DD
include "connect.php";
$today = date('Y-m-d');
echo "<h1>Calendar for $oday"

//Get the ID numberfro mthe URL
$id = $_GET['id'];

//Run a SQL query and store the results in $result
//always specify an order
// * – all columns
//also use *
//FROM events - always specify the table name
//ORDER BY - always specify an order and use ASC or DESC
//WHERE – a condition
$sql = "SELECT * FROM calendar WHERE date>= '$today' LIMIT 100 ORDER BY date ASC, time ASC";
$result = $conn->query($sql);

//If there is at least 1 row in the result, show all the rows
if ($result->num_rows > 0) {

    // output data of each row

    //Get one row at a time until we're out of rows
    while($row = $result->fetch_assoc()) {

    	echo "<h2>";
    	echo {$row['date']}. ";
    	echo "<a href='event.php?id={$row['id']}'>";
    	echo "</h2>";

    	echo "<p>";
    	echo $row['description'];
    	echo "</p>";

        echo "{$row['id']}. {$row['date']}: {$row['title']}<br>";
    }
} else {
    die ["event not found"];
}
$conn->close();
?>

</body>
</html>