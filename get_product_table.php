<?PHP


require "conn.php";




$sql_qry = " select * from product;";

$result = mysqli_query($conn, $sql_qry);

$response = array();

while($row = mysqli_fetch_array($result)){
	
array_push($response,array("id"=>$row[0],"name"=>$row[1],"price"=>$row[2],"stock"=>$row[3],"picture"=>$row[4]));
	
	
	
}

echo  json_encode($response);



?>