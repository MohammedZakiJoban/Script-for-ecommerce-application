<?php
require "conn.php";


$product_name = $_POST["product_name"];
$product_price = $_POST["product_price"];
$product_stock = $_POST["product_stock"];
$product_id = $_POST["product_id"];
$product_price_num = (int)$product_price;
$product_stock_num = (int)$product_stock;






$mysql_qry = "update product set  name = '$product_name' , price = '$product_price_num', stock = '$product_stock_num' where id = $product_id";


if ($conn->query($mysql_qry) === TRUE){
	echo "Data updated";
	
}
else {
	echo "Error: ". $mysql_qry . "<br>". $conn->error;
}


?>