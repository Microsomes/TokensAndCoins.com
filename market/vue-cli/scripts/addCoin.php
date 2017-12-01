<?php
/*
@author Muhammed T Javed- The King
@data 29/11/2017
- purpose of this file is adding coin data to the database
*/


/*method will act as the controller and will interact with the database*/
function addToDB($status,$coinName,$coinSymbol,$coinMaxSupply,$coinCirculatingSupply,$websiteLink,$annoncementLink,$nominatedExchangeOfCoin,$nominatedExchangeTicker){
	//connect to the database
	include_once("connection.php");
	//connected to the database
	
	//add to database now
	
	 
$sql = "INSERT INTO allcoins (Symbol, Name, Price,marketCap,Volume,CirculatingSupply,MaxSupply,price_btc,nominatedMarket,marketID,websiteURL,announcementURL,isMinable,coinClass,tickerOfNominatedExchange,isApproved)
VALUES ('$coinSymbol', '$coinName', 'syncing price...','syncing marketcap','sycing marketcap','$coinCirculatingSupply','$coinMaxSupply','btc prive syncing','$nominatedExchangeOfCoin','$marketID','$websiteLink','$annoncementLink','$isMinable','$classOfCoin','$nominatedExchangeTicker','0')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
	
}


if(isset($_POST['status'])){
	//check if status variable is posted if so continue
	$status= $_POST['status'];
	$coinName= $_POST['coinName'];
	$coinSymbol= $_POST['coinSymbol'];	
	$coinMaxSupply= $_POST['coinMaxSupply'];
	$coinCirculatingSupply= $_POST['circulatingSupply'];
	$websiteLink= $_POST['websiteLink'];
	$annonucementLink= $_POST['annoncementLink'];
	$classOfCoin= $_POST['classOfCoin'];
	$nominatedExchangeOfCoin= $_POST['nominatedExchange'];
	$nominatedExchangeTicker= $_POST['ticker'];
	$nominatedExhangeID= $_POST['marketID'];
	$isMinable= $_POST['minable'];
	/*all the variables that will be used to add to the database*/
	
	addToDB($status,$coinName,$coinSymbol,$coinMaxSupply,$coinCirculatingSupply,$websiteLink,$annonucementLink,$nominatedExchangeOfCoin,$nominatedExchangeTicker);
	//call method to add coin to database
}


?>