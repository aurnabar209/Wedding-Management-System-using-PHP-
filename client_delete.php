<?php
include('connection.php');
if(isset($_GET["id"])){
$id=$_GET["id"];
$sql="delete from booking where booking_id='$id'";
$conn->query($sql);
$sql="delete from liquidity where booking_id='$id'";
$conn->query($sql);
}
header("location:/wms/Clients.php");
exit;

?>