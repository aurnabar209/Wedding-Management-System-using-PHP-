<?php
include('connection.php');
$wedding_type = "";
$groom = "";
$bride = "";
$email = "";
$location = "";
$date= "";
$booking_id="";
$price="";

$errormessage = "";
$successmessage = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
  $wedding_type = $_POST["wedding_type"];
  $groom= $_POST["groom_name"];
  $bride = $_POST["bride_name"];
  $email = $_POST["email"];
  $location= $_POST["location"];
  $date = $_POST["date"];
  do {
    if (empty($wedding_type) || empty($groom) || empty($bride) || empty($email) || empty($location) || empty($date) ) {
      $errormessage = "All the feilds are required";
      break;
    }
	$sql="Insert into booking(wedding_type,groom_name,bride_name,Email,Location,date)
	       Values('$wedding_type','$groom','$bride','$email','$location','$date')";
  
    $result=$conn->query($sql);
    $sql="Select booking_id from booking where email='$email'";
  $result=$conn->query($sql);
  $row=$result->fetch_assoc();
  $booking_id=$row["booking_id"];
  $sql="Select Price from wedding_category where Type='$wedding_type'";
  $result=$conn->query($sql);
  $row=$result->fetch_assoc();
  $price=$row["Price"];
  $sql="Insert into liquidity(booking_id,price)
	       Values('$booking_id',$price)";
  
    $result=$conn->query($sql);
	if(!$result){
	$errormessage="Invalid query".$conn->error;
	break;
	}
  $wedding_type = "";
  $groom = "";
  $bride = "";
  $email = "";
  $location = "";
  $date= "";
    $successmessage = "Added successfully";
	header("location:/wms/guest.php");
	exit;
  } while (false);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"></link>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
  <div class="container my-S">
    <h2>Book Now </h2>
    <?php
    if (!empty($errormessage)) {

      echo "<div class ='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong> $errormessage</strong>
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
    }
    ?>
    <form method="post">
      <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Wedding Type</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="wedding_type" value="<?php echo $wedding_type; ?>">
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Groom</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="groom_name" value="<?php echo $groom; ?>">
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Bride</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="bride_name" value="<?php echo $bride; ?>">
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Email</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Location</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="location" value="<?php echo $location; ?>">
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Date</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="date" value="<?php echo $date; ?>">
          </div>
        </div>
        
        <?php
        if (!empty($successmessage)) {

          echo "
<div class ='row mb-3' >
<div class ='offset-sm-3 col-sm-6' >
<div class ='alert alert-warning alert-dismissible fade show' role='alert'>
<strong> $successmessage</strong>
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>
</div>
</div>";
        }
        ?>
        <div class="row-mb-3">
          <div class="offset-sm-3 col-sm-3 d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
	<br><br>
		 
          <div class="col-sm-3 d-grid">
            <a class="btn btn-outline-primary" href="/wms/guest.php" role="button">Cancel</a>
          </div>
		   </div>
        
    </form>
  </div>

</body>

</html>