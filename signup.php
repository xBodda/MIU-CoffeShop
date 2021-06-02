<?php
session_start();
include("classes/Person.php");
foreach (glob("classes/*.php") as $filename) {
    if($filename != "classes/Person.php" && $filename != "classes/Order.php") {
        include $filename;
    }
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$orderscount = 0;
$location = $_POST['location'];
$usertype = 1;
User::Signup($firstname,$lastname,$email,$phone,$password,$orderscount,$location,$usertype);


?>