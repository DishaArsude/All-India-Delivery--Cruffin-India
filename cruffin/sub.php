<?php

$con = mysqli_connect('localhost', 'root', '', 'cruffin');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO cruff (NAME, EMAIL) VALUES ('" . $_POST["NAME"] . "', '" . $_POST["EMAIL"] . "')";

if (mysqli_query($con, $sql)) 
{
    echo "Your order has been added successfully!";
} 
else 
{
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
?>
