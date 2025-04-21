<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
            <h4> New account</h4>
            </div>
            <div class="card-body">
              <?php 
              if(isset($_SESSION['status'])&& $_SESSION!=''){
                ?>
    
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> <?php echo $_SESSION['status']; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div> 
                
                <?php
                unset($_SESSION['status']);
              }
              ?>

              <form action="code.php" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="">First Name</label>
              <input type="text" name="fname" required class="form-control" placeholder="Enter Firstname">
              </div>
              <div class="form-group">
                <label for="">Last Name</label>
              <input type="text" name="lname" required class="form-control" placeholder="Enter Lastname">
              </div>
              <div class="form-group">
                <label for="">Gender</label>
              <input type="text" name="gender" required class="form-control" placeholder="Enter Gender">
              </div>
              <div class="form-group">
                <label for="">Username</label>
              <input type="text" name="username" required class="form-control" placeholder="Enter Username">
              </div>
              <div class="form-group">
                <label for="">Password</label>
              <input type="password" name="password" required class="form-control" placeholder="Enter Password">
              </div>
              <div class="form-group">
                <label for="">Email</label>
              <input type="text" name="email" required class="form-control" placeholder="Enter Email">
              </div>
              <div class="form-group">
                <label for="">Designation</label>
              <input type="text" name="designation" required class="form-control" placeholder="Enter desigation">
              </div>
              <div class="form-group">
                <label for="">Address</label>
              <input type="text" name="address"required class="form-control" placeholder="Enter Address">
              </div>
              <div class="form-group">
                <label for="">Access Lavel</label>
              <input type="text" name="access_level"required class="form-control" placeholder="Enter access_level">
              </div>
              <div class="form-group">
                <label for="">Profile Picture</label>
              <input type="file" name="profile_picture" class="form-control" >
              </div>
              <div class="form-group">
              <button type="submit" name="save_user_image" class="btn btn-primary">Submit</button>
              </div>
</form>

            </div>

          </div>

        </div>
      </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" ></script>
  
  </body>
</html>