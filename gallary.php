<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">"
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-30">
                <div class="card">
                    <div class="card-header bg-info">
                        <h4 class="text-white"> Gallery </h4>
                    </div>
                    
                    <div class="card-body">
                    <a class="btn btn-info" href="/wms/add_gallary.php" role="button"> New Photo</a>
                        <br>
                        <br>
                        <?php
                        include('connection.php');
                        $sql= "select * from gallery";
                        $query_run=mysqli_query($conn,$sql);
                        ?>
                        
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID </th>
                                    <th>Title </th>
                                    
                                    <th>Description </th>
        
                                    <th>Image </th>
                                    
                                    <th>Edit </th>
                                    <th>Delete </th>
                                </tr>

                            </thead>
                            <tbody>
                                <?php
                                if(mysqli_num_rows($query_run)>0){
                                    foreach($query_run as $row){
                                        ?>
                                        <tr>
                                           <td><?php echo $row['id'];?></td>
                                           <td><?php echo $row['image_title'];?></td>
                                        
                                           <td><?php echo $row['image_description'];?></td>
                                           
                                           <td><img src="<?php echo "image/". $row['image_url'];?>" height="100px" alt="image"></td>
                                           <td><a href="image_edit.php? id=<?php echo $row['id'];?>"class="btn btn-primary">Edit</a></td>
                                           
                                           <td><a href="image_delete.php? id=<?php echo $row['id'];?>"class="btn btn-danger">Delete</a></td>
                                        </tr>
                                        <?php
                                    }

                                }else{

                                    ?>
                                    <tr>
                                        <td>No data available</td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                <tr>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
</div>

    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--  -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
  
  </body>
</html>