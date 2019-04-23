<?php
require "conn.php";


$date_time = $_POST["date_time"];
$price = $_POST["price"];
$User_name = $_POST["User_name"];
$product_id = $_POST["product_id"];
$product_price_num = (int)$price;







$mysql_qry = "update orders set  date_time = '$date_time' , price = '$product_price_num', Username = '$User_name' where id = $product_id";


if ($conn->query($mysql_qry) === TRUE){
	echo "Data updated";
	
}
else {
	echo "Error: ". $mysql_qry . "<br>". $conn->error;
}


?>