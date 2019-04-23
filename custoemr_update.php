<?php
require "conn.php";


$user_name = $_POST["user_name"];
$user_password = $_POST["password"];
$name = $_POST["name"];
$phone_number = $_POST["phone_number"];
$Age = $_POST["age"];
$address = $_POST["address"];
$email = $_POST["email"];
$id = $_POST["id"];



$mysql_qry = "update customer set  name = '$name' , username = '$user_name', password = '$user_password', 
email = '$email', age = '$Age', phone_number = '$phone_number', address = '$address' where id = $id";




if ($conn->query($mysql_qry) === TRUE){
	echo "Data updated";
	
}
else {
	echo "Error: ". $mysql_qry . "<br>". $conn->error;
}


?>