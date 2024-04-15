<?php
$conn = mysqli_connect("localhost", "root", "", "fitsync");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $sql = "INSERT INTO register (first_name, last_name, email, password, confirm_password) 
            VALUES ('$fname', '$lname', '$email', '$password', '$confirm_password')";

    if (mysqli_query($conn, $sql)) {
        header("Location: sign_in.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
