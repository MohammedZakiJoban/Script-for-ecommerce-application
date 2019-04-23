<?php
require "conn.php";


$user_name = $_POST["user_name"];
$user_password = $_POST["password"];



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

$mysql_qry = "insert into admin  (username, password) values ('$user_name','$user_password')";


if ($conn->query($mysql_qry) === TRUE){
	echo "insert success!!!";
	
}
else {
	echo "Error: ". $mysql_qry . "<br>". $conn->error;
}

}
	}

?>