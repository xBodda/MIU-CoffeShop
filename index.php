<?php
include("includes/head.php");

// User::Signup($firstname,"Sayed","email","01158999135","1010abab",0,"Egypt",0);

$allProducts = Drink::viewDrinks();

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
    <div id="top-banner" class="flex align-center justify-center">
        <div class="text-center">
            <h1>Welcome to MIU Coffee Shop</h1>
            <h2>Start Ordering Now</h2>
        </div>
    </div>

    <div class="wrapper">
        <h1 class="heading">Our Menu</h1>
        <div class="order-items">
            <div class="item selected">
                <div class="icon">
                    <i class="fas fa-coffee"></i>
                </div>
                <p>Drinks</p>
            </div>
        </div>

        <h1 class="heading">
            Filter Items
        </h1>

        <div class="order-items">
            <div class="item selected">
                <div class="icon">
                    <i class="fas fa-circle"></i>
                </div>
                <p>All</p>
            </div>
            <div class="item ">
                <div class="icon">
                    <i class="fas fa-mug-hot"></i>
                </div>
                <p>Coffee</p>
            </div>
            <div class="item ">
                <div class="icon">
                    <i class="fas fa-cocktail"></i>
                </div>
                <p>Beverages</p>
            </div>
        </div>

        <div class="products">
        <?php
            foreach($allProducts as $product) {
        ?>
            <a href="products.php?id=<?php echo $product['id'] ?>"><div class="item">
                <div class="image">
                    <img src="<?php echo $product['image'] ?>" alt="">
                </div>
                <div class="title"><?php echo $product['name'] ?></div>
            </div></a>

        <?php } ?>
        </div>
    </div>
</body>
</html>