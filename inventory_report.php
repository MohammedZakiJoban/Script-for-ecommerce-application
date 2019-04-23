 <?PHP


     require "conn.php";




 $mysql_qry = "select name,stock from product where stock < 50  order by stock";


$result = mysqli_query($conn, $mysql_qry);

$response = array();

while($row = mysqli_fetch_array($result)){
	
array_push($response,array("name"=>$row[0],"stock"=>$row[1]));
	
	
	
}

echo  json_encode($response);


  ?>