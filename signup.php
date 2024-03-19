<?php
include 'signup.html';
$conn = mysqli_connect("localhost","root","","signup");

if(!$conn){
    echo "Connection Failed";
}
else{
    $msg="";
    if(isset($_POST['submit'])){
        $fname=mysqli_real_escape_string($conn,$_POST['fname']);
        $lname=mysqli_real_escape_string($conn,$_POST['lname']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $password=mysqli_real_escape_string($conn,md5($_POST['password']));
        $confirm_password=mysqli_real_escape_string($conn,md5($_POST['confirm_password']));
       
        
        if($password===$confirm_password){

        }else{
            $msg="<div class='alert alert-danger'>Password and confirm password do not match</div>";
        }
    }
}
?>