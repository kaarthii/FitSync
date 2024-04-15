<?php

$conn = mysqli_connect("localhost", "root", "", "FitSync");

if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }
 
 if(isset($_POST['submit'])){
     $username = mysqli_real_escape_string($conn, $_POST['username']);
     $password = mysqli_real_escape_string($conn, $_POST['password']);
     
     $sql = "SELECT * FROM register WHERE email='$username' AND password='$password'";
     $result = mysqli_query($conn, $sql);
     
     if(mysqli_num_rows($result) == 1){
        header("Location: input.php");
     } else {
         echo "Invalid username or password!";
     }
 }
 
 mysqli_close($conn);
?>
