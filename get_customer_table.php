<?PHP


require "conn.php";




$sql_qry = " select * from customer;";

$result = mysqli_query($conn, $sql_qry);

$response = array();

while($row = mysqli_fetch_array($result)){
	
array_push($response,array("id"=>$row[0], "name"=>$row[1],"username"=>$row[2],"password"=>$row[3],"age"=>$row[4],"email"=>$row[5],"Phone_number"=>$row[6],"address"=>$row[7]));
	
	
	
}

echo  json_encode($response);



?>