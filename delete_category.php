<?php
include('connection.php');
if(isset($_GET["id"])){
$ID=$_GET["id"];
$sql="delete from features where Category_id='$ID'";
$conn->query($sql);
$sql="delete from wedding_category where ID='$ID'";
$conn->query($sql);
}
header("location:wedding_category.php");
exit;

?>