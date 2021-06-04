<?php
include("includes/head.php");

$user_id = $user->getId();
// $orders = Order::viewOrdersSpecficUser($user_id);

$myOrder = $_SESSION['myOrder'];

// ! Checkout Actions

if(isset($_POST['checkout'])) {
    $date = date('Y-m-d H:i:s');
    $orderr = new Order($user->getId(),$date);
    $orderr->createOrder($myOrder,$date);
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

    <div class="wrapper">
        <div class="order-history">
        <?php
            foreach($myOrder as $order) {
        ?>
            <div class="item">
                <div class="order-image">
                    <img src="layout/images/latte.jpg" alt="">
                </div>
                <div>
                    40 L.E<br>
                    <?php echo $order->getOrderID(); ?>
                </div>

                <div><?php echo '5'; ?></div>
            </div>
        <?php } ?>
        </div>
    </div>
</body>
</html>