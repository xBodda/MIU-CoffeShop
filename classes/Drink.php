<?php

class Drink {
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

    public static function viewDrinks() {
        $drinks = DB::query("SELECT * FROM drinks");
        return $drinks;
    }

    public static function viewSpecficDrink($id) {
        $drink = DB::query("SELECT * FROM drinks WHERE id=:id",array(":id"=>$id))[0];
        $drink;
    }
}

?>