<?php
require "conn.php";


$product_price = $_POST["product_price"];
$User_name = $_POST["User_name"];



$mysql_qry = "TRUNCATE TABLE  shopping_cart";

if ($conn->query($mysql_qry) === TRUE){
	
	echo "Data deleted";
	



$mysql_qry = "insert into orders (price, Username) values ('$product_price', '$User_name')";


if ($conn->query($mysql_qry) === TRUE){
	echo "insert success!!!";
	
	
}
}
else {
	echo "Error: ". $mysql_qry . "<br>". $conn->error;
}


?>