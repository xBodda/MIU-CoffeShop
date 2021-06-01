<?php
session_start();
include("classes/Person.php");
foreach (glob("classes/*.php") as $filename) {
    if($filename != "classes/Person.php" && $filename != "classes/Order.php") {
        include $filename;
    }
}


// include("classes/User.php");
// include("classes/Admin.php");

$user1 = new User("0","Abdelrahman","Sayed","email","01158999135","1010abab",0,"Egypt");

$user1::makeOrder();


?>