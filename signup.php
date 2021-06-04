<?php
session_start();
include("classes/Person.php");
foreach (glob("classes/*.php") as $filename) {
    if($filename != "classes/Person.php" && $filename != "classes/Order.php") {
        include $filename;
    }
}
if(isset($_POST['signup'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $orderscount = 0;
    $location = $_POST['location'];
    $usertype = 1;
    User::Signup($firstname,$lastname,$email,$phone,$password,$orderscount,$location,$usertype);

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | MIU Coffee Shop</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Lato:wght@700&family=Mate+SC&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="layout/css/master.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div id="header">
        <div class="logo">
            <img src="layout/images/logo.jfif" alt="">
        </div>
        <div class="nav flex">
            <a href="index.php"><div class="item">Home</div></a>
            <div class="item">Our Menu</div>
            <a href="history.php"><div class="item">Order History</div></a>
            <a href="signin.php"><div class="item">Login</div></a>
            <a href="signup.php"><div class="item">Sign Up</div></a>
        </div>
    </div>

    <div class="wrapper auth">
        <div class="flex align-center justify-center">
            <form method="POST" action="signup.php">
                <label for="username">Firstname</label><br>
                <input type="text" id="username" name="firstname"><br>
                <label for="username">Lastname</label><br>
                <input type="text" id="username" name="lastname"><br>
                <label for="username">Phone</label><br>
                <input type="text" id="username" name="phone"><br>
                <label for="username">Password</label><br>
                <input type="password" id="username" name="password"><br>
                <label for="username">Email</label><br>
                <input type="text" id="username" name="email"><br>
                <label for="password">Location</label><br>
                <input type="text" id="password" name="location">
                <br>
                <input type="submit" value="Signup" name="signup" class="xbutton">
            </form>
        </div>
    </div>
</body>
</html>