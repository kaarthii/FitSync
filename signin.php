<?php

$conn = mysqli_connect("localhost", "root", "", "login");

if ($conn) {
    echo "Connected";
} else {
    echo "Failed to connect to the database.";
}

?>
