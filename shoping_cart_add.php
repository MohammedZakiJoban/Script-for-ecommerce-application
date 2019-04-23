<?php
require "conn.php";


$product_name = $_POST["product_name"];
$product_price = $_POST["product_price"];
$product_stock = $_POST["product_stock"];




$mysql_qry = "insert into shopping_cart (name,price,picture) values ('$product_name','$product_price','$product_stock')";


if ($conn->query($mysql_qry) === TRUE){
	echo "insert success!!!";
	
}
else {
	echo "Error: ". $mysql_qry . "<br>". $conn->error;
}


?>