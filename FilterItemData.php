<?php

if($_SERVER['REQUEST_METHOD']=='POST'){


 $ItemId= $_POST['item_id'];

// Create connection
$conn = new mysqli("localhost", "root", "", "goods_system");

if ($conn->connect_error) {
 
 die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM items where item_id = '$ItemId'" ;

$result = $conn->query($sql);

if ($result->num_rows >0) {
 
 
 while($row[] = $result->fetch_assoc()) {
 
 $tem = $row;
 
 $json = json_encode($tem);
 
 }
 
} else {
 echo "No Results Found.";
}
 echo $json;

$conn->close();
}
?>