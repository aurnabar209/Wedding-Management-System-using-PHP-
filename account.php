
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
<h2> List of Account</h2>
<a class="btn btn-primary" href="/wms/create.php" role="button"> New Account</a>
<br>
<table class="table">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Location</th>
<th>Created At</th>
</tr>
</thead>
<tbody>
<?php
include("connection.php");
$sql="select ID,concat(FirstName,' ',LastName) as Name,Email,phone,Location, date_created from account";
$result=$conn->query($sql);
if(!$result){
die("invalid query".$conn->error);
}
while($row=$result->fetch_assoc()){
	echo"
	<tr>
<td>$row[ID]</td>
<td> $row[Name]</td>
<td> $row[Email]</td>
<td> $row[phone]</td>
<td> $row[Location]</td>
<td> $row[date_created]</td>
<td> <a class='btn btn-primary btn-sm' href='/wms/edit.php?id=$row[ID]' > Edit</a>
 <a class='btn btn-danger btn-sm' href='/wms/delete.php?id=$row[ID]'>Delete</a>
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