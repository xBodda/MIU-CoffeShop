<?php
class Admin extends Person {
    private $role;

    function __construct($id,$firstName,$lastnName,$email,$phoneNumber,$password,$role) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->password = $password;
        $this->role = $role;
	}

    function addNewDrink() {

    }

    function addNewBev() {

    }

    function viewOrders() {

    }
}

?>