<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">"
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <style>
        body {
            background: url('image/gold.jpg') center;
            
        }
		</style>
  
</head>
<body>
<div class="container my-S" id="table">
<h2> Features </h2>
<br>
<?php
include('connection.php');
if($_SERVER['REQUEST_METHOD']=='GET'){
if(!isset($_GET["Type"])){
	header("location:/wms/wedding_category.php");
	exit;
	
}
$type=$_GET["Type"];
$sql="select Image from wedding_category where Type='$type'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$image="image/".$row['Image'];
echo"
<div style='border: 5px solid gold; padding: 10px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);'>
  <center>
    <img src='$image' width='350'style='border: 5x solid gold; display: block; margin: 0 auto;' />
  </center>
</div>
";

}
?>
</br>
<a class="btn btn-warning" href="/wms/add_features.php" role="button">Add</a>
<table class="table">
<thead>
<tr>
<th>Features</th>

</tr>
</thead>
<tbody>
<tbody>
<?php
include("connection.php");
$sql="select Features_id,title from features where category_id=(select ID from wedding_category where Type='$type')";
$result=$conn->query($sql);
if(!$result){
die("invalid query".$conn->error);
}
while($row=$result->fetch_assoc()){
	echo"
	<tr>
<td>$row[title]</td>
<td><a class='btn btn-danger btn-sm' href='/wms/delete_features.php?id=$row[Features_id]'>Delete</a></td>

</tr>
"
;
	
}
?>

</tbody>
</table>


</tbody>
</table>
</div>

  
</body>
</html>