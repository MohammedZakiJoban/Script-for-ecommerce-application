<?php
require "conn.php";


$user_name = $_POST["user_name"];
$user_password = $_POST["password"];






$mysql_qry = "update admin set  username = '$user_name' , password = '$user_password' where username = $user_name";


if ($conn->query($mysql_qry) === TRUE){
	echo "Data updated";
	
}
else {
	echo "Error: ". $mysql_qry . "<br>". $conn->error;
}


?>