<?php
session_start();
include('connection.php');
if(isset($_POST['save_wedding_features'])){
    $Category_ID=$_POST['category_id'];
    $Title=$_POST['title'];
   
    $sql="Insert into features (category_id,title)
    Values('$Category_ID','$Title')";
    $query_run=mysqli_query($conn,$sql);
    if($query_run){
        $_SESSION['status']='Data Stored';
        header('location:/wms/features.php');

    }
    else{
        $_SESSION['status']='Data did not Stored';
        header('location:/wms/add_features.php');

    }
}

?>