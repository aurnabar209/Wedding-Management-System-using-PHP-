<?php
include("connection.php");
if(isset($_POST['submit'])){
$email=$_POST['email'];
$password=$_POST['pass'];
$sql="select * from account where Email='$email' and Password='$password'";
$result= mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
if($count==1){
	header("Location:guest.php");
	
}
else{
echo '<script>
  window.location.href="index.php";
  alert("Login failed")
  </script>';
}
}
  
  
  ?>
	