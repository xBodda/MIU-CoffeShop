<?php
session_start();
include("classes/Person.php");
include("classes/Drink.php");
foreach (glob("classes/*.php") as $filename) {
    if($filename != "classes/Person.php" && $filename != "classes/Order.php" && $filename != "classes/Drink.php") {
        include $filename;
    }
}

if(!isset($_SESSION["User"]))
{
    // header("Location: index.php");
    // exit();
}
else
{
    $user = unserialize($_SESSION['User']);
    $_SESSION['myOrder'] = $myOrder = array();
}

?>