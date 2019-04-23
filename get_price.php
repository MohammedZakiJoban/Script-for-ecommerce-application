<?php
require "conn.php";





$mysql_qry = "SELECT SUM(price) AS value_sum FROM shopping_cart;";


$result = $conn->query($mysql_qry);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo $row["value_sum"];
    }
} else {
    echo "0 results";
}

?>