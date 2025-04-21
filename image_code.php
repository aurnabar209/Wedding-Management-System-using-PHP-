<?php
session_start();
include('connection.php');
if(isset($_POST['save_picture'])){
    $Title=$_POST['image_title'];
    $Description=$_POST['image_description'];
    $picture=$_FILES['image_url']['name'];

    $sql="Insert into gallery (image_title,image_description,image_url)
    Values('$Title','$Description','$picture')";
    $query_run=mysqli_query($conn,$sql);
    if($query_run){
        move_uploaded_file($_FILES["image_url"]["tmp_name"],"image/".$_FILES["image_url"]["name"]);
        $_SESSION['status']='Data Stored';
        header('location:/wms/gallary.php');

    }
    else{
        $_SESSION['status']='Data did not Stored';
        header('location:/wms/add_gallary.php');

    }
}
if(isset($_POST['update_image'])){
    $ID=$_POST['id'];
    $Title=$_POST['title'];
    $description=$_POST['description'];
    $new_picture=$_FILES['image']['name'];
    $old_picture=$_POST['image_old'];
    if($new_picture!=''){
        $update_file=$_FILES['image']['name'];
    }
    else{
        $update_file=$old_picture;
    }
 
       $query= "Update gallery Set image_title='$Title',image_description=' $description' ,image_url='$update_file' where id='$ID'";
    $query_run= mysqli_query($conn,$query);
    if($query_run){
        if($_FILES['image']['name']!=''){
            move_uploaded_file($_FILES["image"]["tmp_name"],"image/".$_FILES["image"]["name"]);
            unlink("image/".$old_picture);

        }
        $_SESSION['status']="Updated seccessfully";
        header('Location:gallary.php');
    }
    else{
        $_SESSION['status']="NOT Updated ";
        header('Location:image_edit.php');
    }
    

}
?>