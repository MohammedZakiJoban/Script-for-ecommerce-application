<?php
require "conn.php";


$date_time = $_POST["date_time"];
$price = $_POST["price"];
$User_name = $_POST["User_name"];




$mysql_qry = "insert into orders  (date_time, price, Username) values 
('$date_time','$price','$User_name')";


if ($conn->query($mysql_qry) === TRUE){
	echo "insert success!!!";
	
}
else {
	echo "Error: ". $mysql_qry . "<br>". $conn->error;
}


?>