<?PHP


require "conn.php";




$sql_qry = " select * from orders;";

$result = mysqli_query($conn, $sql_qry);

$response = array();

while($row = mysqli_fetch_array($result)){
	
array_push($response,array("id"=>$row["id"],"price"=>$row["price"],"date_time"=>$row["date_time"],"Username"=>$row["Username"]));
	
	
	
}

echo  json_encode($response);



?>