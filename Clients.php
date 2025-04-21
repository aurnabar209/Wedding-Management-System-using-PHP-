<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">"
  
  
</head>
<body>
<div class="container my-S" id="table">
<h2> My Clients</h2>
<a class="btn btn-primary" href="/wms/new_client.php" role="button"> New Client</a>
<a class="btn btn-primary" href="/wms/liquidity.php" role="button"> Liquidity</a>
<br>
<table class="table">
<thead>
<tr>
<th>ID</th>
<th>Wedding Type</th>
<th>Groom Name</th>
<th>Bride Name</th>
<th>Location</th>
<th>Email</th>
<th>Date</th>
</tr>
</thead>
<tbody>
<?php
include("connection.php");
$sql="select * from booking";
$result=$conn->query($sql);
if(!$result){
die("invalid query".$conn->error);
}
while($row=$result->fetch_assoc()){
	echo"
	<tr>
<td>$row[booking_id]</td>
<td> $row[wedding_type]</td>
<td> $row[groom_name]</td>
<td> $row[bride_name]</td>
<td> $row[location]</td>
<td> $row[email]</td>
<td> $row[Date]</td>
<td> <a class='btn btn-primary btn-sm' href='/wms/Client_edit.php?booking_id=$row[booking_id]' > Edit</a>
 <a class='btn btn-danger btn-sm' href='/wms/client_delete.php?id=$row[booking_id]'>Delete</a>
 </td>
</tr>
"
;
	
}
?>

</tbody>
</table>
</div>

  
</body>
</html>