<?php
/*
@author Muhammed T Javed- The King
@data 29/11/2017

- purpose of this file is to allow connection to mysql database
*/

/*
on to the connection
*/

$servername = "localhost";
$username = "root";
$password = "";
$databaseName="market";
//database utility variable above


// Create connection
$conn = new mysqli($servername, $username, $password,$databaseName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

//connection to the mysql database should be establisghed now

?>