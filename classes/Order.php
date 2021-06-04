<?php
class Order {
    private $orderID;
    private $userID;
    private $paidDate;

    function __construct($userID,$paidDate){
        $this->userID = $userID;
        $this->paidDate = $paidDate;
    }

    function createOrder($myOrder) {
        $date = date('Y-m-d H:i:s');
        DB::query("INSERT INTO orders VALUES(NULL,:userID,:paidDate)",array(":userID"=>Self::getUserID(),":paidDate"=>$date));

        $order_id = DB::query('SELECT orderID FROM orders ORDER BY orderID DESC LIMIT 1')[0]['orderID'];

        foreach($myOrder as $order) {
            DB::query("INSERT INTO order_items VALUES(NULL,:orderID,:drink,:beverage)",array(":orderID"=>$order_id,":drink"=>$order->getDrink(),":beverage"=>$order->getBeverage()));
        }
    }

    function cancelOrder() {

    }

    /**
     * Get the value of userID
     */ 
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Set the value of userID
     *
     * @return  self
     */ 
    public function setUserID($userID)
    {
        $this->userID = $userID;

        return $this;
    }

    public function getPaidDate()
    {
        return $this->paidDate;
    }

    public function setPaidDate($paidDate)
    {
        $this->paidDate = $paidDate;

        return $this;
    }
}
?>