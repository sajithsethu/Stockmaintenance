<?php

// Server name must be localhost
$servername = "localhost";

// In my case, user name will be root
$username = "id21333439_root";

// Password is empty
$password = "Dash@12345";
//Db Name

$db="id21333439_ze_form";
// Creating a connection
$conn =new mysqli($servername,
			$username, $password,$db);

// Check connection
if ($conn) {

 echo"success";
}
 else {
	echo "Error: " . $conn->error;
}

// Closing connection
$conn->close();
?>
