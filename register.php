<?php
require "conn.php";


$user_name = $_POST["user_name"];
$user_password = $_POST["password"];
$name = $_POST["name"];
$phone_number = $_POST["phone_number"];
$Age = $_POST["age"];
$address = $_POST["address"];
$email = $_POST["email"];



$mysql_qry = "SELECT * FROM customer WHERE username='$user_name';";

$result = mysqli_query($conn, $mysql_qry);

if ( mysqli_num_rows($result ) > 0){	

	echo "username already exist";
	
}
   
 else
    {
		
$mysql_qry = "SELECT * FROM admin WHERE username='$user_name';";

$result = mysqli_query($conn, $mysql_qry);
if ( mysqli_num_rows($result ) > 0){	

	echo "username already exist";

} else {
   $mysql_qry = "insert into customer  (name, password, Age, address, phone_number, email, username) values 
('$name','$user_password','$Age','$address','$phone_number','$email','$user_name')";


if ($conn->query($mysql_qry) === TRUE){
	
	echo "insert success!!!";
	
}
else {
	echo "Error: ". $mysql_qry . "<br>". $conn->error;
}
    }

	}

?>