<?php
session_start();
include('connection.php');
if(isset($_POST['save_user_image'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $designation=$_POST['designation'];
    $address=$_POST['address'];
    $access_level=$_POST['access_level'];
    $profile_picture=$_FILES['profile_picture']['name'];

    $sql="Insert into admin (firstname,lastname ,gender,username,email,password,designation,address,access_level,profile_picture)
    Values('$fname','$lname','$gender','$username','$email','$password','$designation','$address','$access_level','$profile_picture')";
    $query_run=mysqli_query($conn,$sql);
    if($query_run){
        move_uploaded_file($_FILES["profile_picture"]["tmp_name"],"image/".$_FILES["profile_picture"]["name"]);
        $_SESSION['status']='Data Stored';
        header('location:/wms/user_create.php');

    }
    else{
        $_SESSION['status']='Data did not Stored';
        header('location:/wms/user_create.php');

    }
}
if(isset($_POST['update_user_image'])){
    $id=$_POST['id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $designation=$_POST['designation'];
    $address=$_POST['address'];
    $access_level=$_POST['access_level'];
    $new_profile_picture=$_FILES['profile_picture']['name'];
    $old_profile_picture=$_POST['profile_picture_old'];
    if($new_profile_picture!=''){
        $update_file=$_FILES['profile_picture']['name'];
    }
    else{
        $update_file=$old_profile_picture;
    }
 
       $query= "Update admin Set firstname='$fname',lastname='$lname' ,gender='$gender',username='$username',email='$email',password='$password',designation='$designation',address='$address',access_level='$access_level',profile_picture='$update_file' where id='$id'";
    $query_run= mysqli_query($conn,$query);
    if($query_run){
        if($_FILES['profile_picture']['name']!=''){
            move_uploaded_file($_FILES["profile_picture"]["tmp_name"],"image/".$_FILES["profile_picture"]["name"]);
            unlink("image/".$old_profile_picture);

        }
        $_SESSION['status']="Updated seccessfully";
        header('Location:users.php');
    }
    else{
        $_SESSION['status']="NOT Updated ";
        header('Location:users.php');
    }
    

}
?>