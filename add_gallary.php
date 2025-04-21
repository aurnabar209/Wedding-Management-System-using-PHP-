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
            <h4> New Photo</h4>
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

              <form action="image_code.php" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="">Title</label>
              <input type="text" name="image_title" required class="form-control" placeholder="Enter title">
              </div>
              <div class="form-group">
                <label for="">Description</label>
              <input type="text" name="image_description" required class="form-control" placeholder="Enter description">
              </div>
             
              <div class="form-group">
                <label for="">Image</label>
              <input type="file" name="image_url" class="form-control" >
              </div>
              <div class="form-group">
              <button type="submit" name="save_picture" class="btn btn-primary">Submit</button>
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