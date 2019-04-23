<?php
require "conn.php";


$user_name = $_POST["user_name"];







$mysql_qry =  "DELETE FROM shopping_cart WHERE name= '$user_name'";


if ($conn->query($mysql_qry) === TRUE){
	echo "Data deleted";
	
}
else {
	echo "Please enter vaild ID";
}


?>