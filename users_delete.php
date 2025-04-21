<?php
include('connection.php');
if(isset($_GET["id"])){
$id=$_GET["id"];
$sql="delete from admin where id=$id";
$conn->query($sql);
}
header("location:/wms/users.php");
exit;

?>