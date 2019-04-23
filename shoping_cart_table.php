<?PHP


require "conn.php";




$sql_qry = " select * from shopping_cart;";

$result = mysqli_query($conn, $sql_qry);

$response = array();

while($row = mysqli_fetch_array($result)){
	
array_push($response,array("id"=>$row[0],"name"=>$row[1],"price"=>$row[2],"picture"=>$row[3]));
	
	
	
}

echo  json_encode($response);



?>