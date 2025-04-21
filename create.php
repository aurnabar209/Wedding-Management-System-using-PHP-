<?php
include('connection.php');
$fname = "";
$lname = "";
$password = "";
$email = "";
$phone = "";
$location = "";
$city = "";

$errormessage = "";
$successmessage = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $password = $_POST["password"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $location = $_POST["location"];
  $city = $_POST["city"];
  do {
    if (empty($fname) || empty($lname) || empty($password) || empty($email) || empty($phone) || empty($location) || empty($city)) {
      $errormessage = "All the feilds are required";
      break;
    }
	$sql="Insert into account(FirstName,LastName,Password,Email,Phone,Location,City)
	       Values('$fname','$lname','$password','$email','$phone','$location','$city')";
    $result=$conn->query($sql);
	if(!$result){
	$errormessage="Invalid query".$conn->error;
	break;
	}
    $fname = "";
    $lname = "";
    $password = "";
    $email = "";
    $phone = "";
    $location = "";
    $city = "";
    $successmessage = "Added successfully";
	header("location:/wms/account.php");
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
    <h2>New Account </h2>
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
        <label class="col-sm-3 col-form-label">First Name</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="fname" value="<?php echo $fname; ?>">
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Last Name</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="lname" value="<?php echo $lname; ?>">
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Password</label>
          <div class="col-sm-6">
            <input type="password" class="form-control" name="password" value="<?php echo $password; ?>">
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Email</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Phone</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>">
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Location</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="location" value="<?php echo $location; ?>">
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">City</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="city" value="<?php echo $city; ?>">
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
            <a class="btn btn-outline-primary" href="/wms/account.php" role="button">Cancel</a>
          </div>
		   </div>
        
    </form>
  </div>

</body>

</html>