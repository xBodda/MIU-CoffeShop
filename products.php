<?php
include("includes/head.php");


// * To Retreive All Drinks
$all_drinks = Drink::viewDrinks();
foreach($all_drinks as $drink) {


    // ? HTML Code And Substitute Data

}





// * To Make an Order
$myOrder = array();

$Mochaa = new OrderItem("Mochaa","Skimmed Milk");
array_push($myOrder,$Mochaa);

$Cappu = new OrderItem("Cappu","Extra Foam");
array_push($myOrder,$Cappu);

$user->makeOrder($myOrder);

?>