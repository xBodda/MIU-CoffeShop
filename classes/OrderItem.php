<?php
class OrderItem {
    private $orderID;
    private $drink;
    private $beverage=array();

    function __construct($orderID,$drink,$beverage) {
        $this->orderID = $orderID;
        $this->drink = $drink;
        $this->beverage = $beverage;
    }

    function removeItem() {
        
    }

}

?>