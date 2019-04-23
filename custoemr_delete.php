<?php
require "conn.php";


$user_name = $_POST["user_name"];
$num = (int)$user_name;







$mysql_qry =  "DELETE FROM customer WHERE id= '$num'";


if ($conn->query($mysql_qry) === TRUE){
	echo "Data deleted";
	
}
else {
	echo "Please enter vaild ID";
}


?>