<?php

class Person {
    private $id;
	private $firstName;
	private $lastName;
	private $email;
	private $phoneNumber;
    private $password;

	function __construct($id,$firstName,$lastnName,$email,$phoneNumber,$password) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->password = $password;
	}

	function changePassword($newpassword)	{
		DB::query("UPDATE users SET password=:password",array(":password"=>$newpassword));
	}
}
?>