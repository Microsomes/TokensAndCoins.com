<?php
/*
@author Muhammed T Javed- The King
@date 29/11/2017
- script used to add market data to the database
*/



/*
method will be used to add market info to the database- act as the data controller 
*/
function addMarketToDB($marketName,$marketTickerURL){
	
	//include the database
	include_once("connection.php");
	//database connected
	
	//adding market data to the database
	
	$sql = "INSERT INTO MyGuests (MarketName, TickerURL	, isApproved)
	VALUES ('$marketName', '$marketTickerURL', '0')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

$conn->close();	
}


if(isset($_POST['status'])){
	/*
	check if status variable was posted to this script proceed if it does
	*/
	
	
	//all the variables that will be posted to this script
	
}

?>