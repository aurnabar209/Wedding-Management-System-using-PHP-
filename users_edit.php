<?php
//echo $id=$_GET['id'];
?>
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
            <div class="card-header bg-warning">
            <h4> Edit data</h4>
            </div>
            <div class="card-body">
                <?php
                include('connection.php');
                $id=$_GET['id'];
                $query="select * from admin where id='$id'";
                $query_run=mysqli_query($conn,$query);
                if(mysqli_num_rows($query_run)>0){
                    foreach($query_run as $row){
                        echo $row['id'];
                       ?>
                       <form action="code.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value = "<?php echo $row['id'];?>"/>
              <div class="form-group">
                <label for="">First Name</label>
              <input type="text" name="fname" value = "<?php echo $row['firstname'];?>" required class="form-control" placeholder="Enter Firstname">
              </div>
              <div class="form-group">
                <label for="">Last Name</label>
              <input type="text" name="lname" value = "<?php echo $row['lastname'];?>"required class="form-control" placeholder="Enter Lastname">
              </div>
              <div class="form-group">
                <label for="">Gender</label>
              <input type="text" name="gender" value = "<?php echo $row['gender'];?>" required class="form-control" placeholder="Enter Gender">
              </div>
              <div class="form-group">
                <label for="">Username</label>
              <input type="text" name="username"value = "<?php echo $row['username'];?>" required class="form-control" placeholder="Enter Username">
              </div>
              <div class="form-group">
                <label for="">Password</label>
              <input type="password" name="password" value = "<?php echo $row['password'];?>" required class="form-control" placeholder="Enter Password">
              </div>
              <div class="form-group">
                <label for="">Email</label>
              <input type="text" name="email" value = "<?php echo $row['email'];?>" required class="form-control" placeholder="Enter Email">
              </div>
              <div class="form-group">
                <label for="">Designation</label>
              <input type="text" name="designation" value = "<?php echo $row['designation'];?>"required class="form-control" placeholder="Enter desigation">
              </div>
              <div class="form-group">
                <label for="">Address</label>
              <input type="text" name="address" value = "<?php echo $row['address'];?>"required class="form-control" placeholder="Enter Address">
              </div>
              <div class="form-group">
                <label for="">Access Lavel</label>
              <input type="text" name="access_level" value = "<?php echo $row['access_level'];?>"required class="form-control" placeholder="Enter access_level">
              </div>
              <div class="form-group">
                <label for="">Profile Picture</label>
              <input type="file" name="profile_picture" class="form-control" >
              <input type="hidden" name="profile_picture_old" value = "<?php echo $row['profile_picture'];?>">
              </div>
              <img src="<?php echo "image/".$row['profile_picture']?>" width="100px">
              <div class="form-group">
              <button type="submit" name="update_user_image" class="btn btn-primary">Update</button>
              </div>
               </form>


                       <?php
                    }

                }
                else{
                    echo "No records available";
                }
                ?>
        
              
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