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
<h2> Liquidity</h2>
<br>
<table class="table">
<thead>
<tr>
<th>Booking_id</th>
<th>Wedding Type</th>
<th>Price</th>
<th>Issue_date</th>
</tr>
</thead>
<tbody>
<?php
include("connection.php");
$sql="SELECT b.booking_id, wc.type, wc.price, l.issue_date
     FROM booking b
    JOIN wedding_category wc ON b.wedding_type = wc.type
     JOIN liquidity l ON b.booking_id = l.booking_id";
$result=$conn->query($sql);
if(!$result){
die("invalid query".$conn->error);
}
while($row=$result->fetch_assoc()){
	echo"
	<tr>
<td>$row[booking_id]</td>
<td> $row[type]</td>
<td> $row[price]</td>
<td> $row[issue_date]</td>
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