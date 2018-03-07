<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "calendar";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Run a SQL query and store the results in $result
//always specify an order
// * – all columns
//also use *
//FROM events - always specify the table name
//ORDER BY - always specify an order and use ASC or DESC
$sql = "SELECT id, date, title FROM events ORDER by date ASC, time DESC";
$result = $conn->query($sql);

//If there is at least 1 row in the result, show all the rows
if ($result->num_rows > 0) {
    // output data of each row

    //Get one row at a time until we're out of rows
    while($row = $result->fetch_assoc()) {

    	echo "<h1>";
    	echo $row['id'];//Associative array
    	echo '. ';
    	echo "</h1>";
    	echo $row['title'];

    	echo "<h2>";
    	echo $row['date'];
    	echo "</h2>";


        echo "{$row['id']}. {$row['date']}: {$row['title']}<br>";
    }
} else {
    echo "No events";
}
$conn->close();
?>