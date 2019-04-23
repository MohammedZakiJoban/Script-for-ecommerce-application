<?php

require "conn.php";
$user_name = $_POST["user_name"];
$user_password = $_POST["password"];



$mysql_qry = "select * from admin where BINARY username like '$user_name' and password like '$user_password';";

$result = mysqli_query($conn, $mysql_qry);

if ( mysqli_num_rows($result ) > 0){	

	echo "admin access";
}
else {
	$mysql_qry = "select * from customer where  BINARY username like '$user_name' and password like '$user_password';";
	$result = mysqli_query($conn, $mysql_qry);
	
	if (mysqli_num_rows($result ) > 0){
	
	echo "welcome";
}
else {
	echo "login not success";	
}	
	
}

?>
