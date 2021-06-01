<?php
class Order {
    private $orderID;
    private $userID;
    private $paidDate;

    function __construct($orderID,$userID,$paidDate){
        $this->orderID = $orderID;
        $this->userID = $userID;
        $this->paidDate = $paidDate;
    }

    function createOrder() {

    }

    function cancelOrder() {

    }
}
?>