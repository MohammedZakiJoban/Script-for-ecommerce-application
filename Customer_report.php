<?php
require "conn.php";









$mysql_qry = "SELECT Username, count(Username) as number_of_order, sum(price) as total from orders group by Username order by number_of_order";


$result = mysqli_query($conn, $mysql_qry);

$response = array();

while($row = mysqli_fetch_array($result)){
	
array_push($response,array("username"=>$row[0],"number_of_order"=>$row[1], "total"=>$row[2]));
	
	
	
}

echo  json_encode($response);


?>