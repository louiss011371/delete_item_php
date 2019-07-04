<?php
if($_SERVER['REQUEST_METHOD']=='POST'){



 $con = mysqli_connect("localhost", "root", "", "goods_system");

 $ItemId = $_POST['item_id'];

$Sql_Query = "DELETE FROM items WHERE item_id = '$ItemId'";

 if(mysqli_query($con,$Sql_Query))
{
 echo 'Record Deleted Successfully';
}
else
{
 echo 'Something went wrong';
 }
 }
 mysqli_close($con);
?>