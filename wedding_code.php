<?php
session_start();
include('connection.php');
if(isset($_POST['save_wedding_image'])){
    $Type=$_POST['Type'];
    $Price=$_POST['Price'];
    $wedding_picture=$_FILES['wedding_picture']['name'];

    $sql="Insert into wedding_category (Type,Price,Image)
    Values('$Type','$Price','$wedding_picture')";
    $query_run=mysqli_query($conn,$sql);
    if($query_run){
        move_uploaded_file($_FILES["wedding_picture"]["tmp_name"],"image/".$_FILES["wedding_picture"]["name"]);
        $_SESSION['status']='Data Stored';
        header('location:/wms/wedding_create.php');

    }
    else{
        $_SESSION['status']='Data did not Stored';
        header('location:/wms/wedding_create.php');

    }
}
if(isset($_POST['update_wedding_image'])){
    $ID=$_POST['ID'];
    $Type=$_POST['Type'];
    $Price=$_POST['Price'];
    $new_wedding_picture=$_FILES['wedding_picture']['name'];
    $old_wedding_picture=$_POST['profile_wedding_old'];
    if($new_wedding_picture!=''){
        $update_file=$_FILES['wedding_picture']['name'];
    }
    else{
        $update_file=$old_wedding_picture;
    }
 
       $query= "Update wedding_category Set Type='$Type',Price='$Price' ,Image='$update_file' where ID='$ID'";
    $query_run= mysqli_query($conn,$query);
    if($query_run){
        if($_FILES['wedding_picture']['name']!=''){
            move_uploaded_file($_FILES["wedding_picture"]["tmp_name"],"image/".$_FILES["wedding_picture"]["name"]);
            unlink("image/".$old_wedding_picture);

        }
        $_SESSION['status']="Updated seccessfully";
        header('Location:Wedding_category.php');
    }
    else{
        $_SESSION['status']="NOT Updated ";
        header('Location:Wedding_category.php');
    }
    

}
?>