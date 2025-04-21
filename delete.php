<?php
include('connection.php');
if(isset($_GET["id"])){
$id=$_GET["id"];
$sql="delete from account where id=$id";
$conn->query($sql);
}
header("location:/wms/account.php");
exit;

?>