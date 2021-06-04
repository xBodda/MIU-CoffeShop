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

// $user->makeOrder($myOrder);
if(isset($_GET['id'])) {
    $product = Drink::viewSpecficDrink($_GET['id']);
} else {
    die("Not Found");
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
            <div class="item">Home</div>
            <div class="item">Our Menu</div>
            <div class="item">Order History</div>
            <div class="item">Login</div>
            <div class="item">Sign Up</div>
        </div>
    </div>



    <div class="wrapper">
        <div class="product-details">
            <div class="product-image">
                <img src="<?php echo $product['image'] ?>" alt="">
            </div>
            <div class="product-info">
                <div class="title"><?php echo $product['name'] ?></div>
                <div class="price"><?php echo $product['price'] ?> L.E</div>
                <div class="overview">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, tempora. Labore harum impedit quas deleniti totam amet, eligendi, id est mollitia accusamus accusantium voluptas sequi porro laudantium pariatur. Id, provident.
                </div>
                <h1 class="heading">
                    Extra Options
                </h1>
                <div class="order-items checkbox">
                    <div class="item">
                        <div class="icon">
                            <i class="fas fa-cookie-bite"></i>
                        </div>
                        <p>Chocolate</p>
                    </div>
                    <div class="item ">
                        <div class="icon">
                            <i class="fas fa-blender"></i>
                        </div>
                        <p>Skimmed Milk</p>
                    </div>
                    <div class="item ">
                        <div class="icon">
                            <i class="fas fa-ring"></i>
                        </div>
                        <p>Soy</p>
                    </div>
                </div>
                <div class="xbutton">Add to cart</div>
            </div>
        </div>
        

    </div>
</body>
</html>