<?php
session_start();
include("classes/Person.php");
foreach (glob("classes/*.php") as $filename) {
    if($filename != "classes/Person.php" && $filename != "classes/Order.php" && $filename != "classes/Drink.php") {
        include $filename;
    }
}

if(!isset($_SESSION["User"]))
{
    header("Location: signin.php");
    exit();
}
else
{
    $user = unserialize($_SESSION['User']);
    echo $user->getFirstName().' '.$user->getLastName();
}

?>