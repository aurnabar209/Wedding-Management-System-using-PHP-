<?php
include('connection.php');
if(isset($_GET["id"])){
$id=$_GET["id"];
$sql="delete from gallery where id='$id'";
$conn->query($sql);
}
header("location:gallary.php");
exit;

?>