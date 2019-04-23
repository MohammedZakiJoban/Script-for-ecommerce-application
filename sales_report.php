<?PHP


require "conn.php";




$sql_qry = "SELECT calendar.datefield AS DATE, IFNULL(SUM(orders.price),0) AS total_sales 
FROM orders RIGHT JOIN calendar ON (DATE(orders.date_time) = calendar.datefield) 
WHERE (calendar.datefield BETWEEN (SELECT MIN(DATE(date_time)) FROM orders) AND (SELECT MAX(DATE(date_time)) FROM orders)) 
GROUP BY DATE";

$result = mysqli_query($conn, $sql_qry);

$response = array();

while($row = mysqli_fetch_array($result)){
	
array_push($response,array("DATE"=>$row[0],"total_sales"=>$row[1]));
	
	
	
}

echo  json_encode($response);



?>