<?php
include('connection.php');
if(isset($_GET["id"])){
$features_id=$_GET["id"];
$sql="delete from features where Features_id='$features_id'";
$conn->query($sql);
}
header("location:features.php");
exit;

?>