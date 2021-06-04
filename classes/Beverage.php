<?php

class Beverage {
    private $name;
    private $price;

    function __construct() {
        
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    public static function viewBeverages() {
        $beverages = DB::query("SELECT * FROM beverages");
        return $beverages;
    }

    public static function viewSpecficBeverage($id) {
        $beverage = DB::query("SELECT * FROM beverages WHERE id=:id",array(":id"=>$id))[0];
        return $beverage;
    }
}

?>