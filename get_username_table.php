<?PHP


require "conn.php";




$sql_qry = " select * from admin;";

$result = mysqli_query($conn, $sql_qry);

$response = array();

while($row = mysqli_fetch_array($result)){
	
array_push($response,array("id"=>$row[0],"username"=>$row[1],"password"=>$row[2]));
	
	
	
}

echo  json_encode($response);



?>