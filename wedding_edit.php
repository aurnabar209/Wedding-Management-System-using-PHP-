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
            <h4> Edit Category</h4>
            </div>
            <div class="card-body">
                <?php
                include('connection.php');
                $id=$_GET['id'];
                $query="select * from wedding_category where ID='$id'";
                $query_run=mysqli_query($conn,$query);
                if(mysqli_num_rows($query_run)>0){
                    foreach($query_run as $row){
                        
                       ?>
                       <form action="wedding_code.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="ID" value = "<?php echo $row['ID'];?>"/>
              <div class="form-group">
                <label for="">Wedding Type</label>
              <input type="text" name="Type" value = "<?php echo $row['Type'];?>" required class="form-control" placeholder="Enter Type">
              </div>
              <div class="form-group">
                <label for="">Price</label>
              <input type="text" name="Price" value = "<?php echo $row['Price'];?>"required class="form-control" placeholder="Enter Price">
              </div>
              <div class="form-group">
                <label for="">Image</label>
              <input type="file" name="wedding_picture" class="form-control" >
              <input type="hidden" name="profile_wedding_old" value = "<?php echo $row['Image'];?>">
              </div>
              <img src="<?php echo "image/".$row['Image']?>" width="100px">
              <div class="form-group">
              <button type="submit" name="update_wedding_image" class="btn btn-primary">Update</button>
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