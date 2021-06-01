<?php
include ("Order.php");
class User extends Person {
    private $ordersCount;
    private $location;

    function __construct() {

    }

    function __construct($id,$firstName,$lastName,$email,$phoneNumber,$password,$ordersCount,$location) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->password = $password;
        $this->ordersCount = $ordersCount;
        $this->location = $location;
	}

    static function makeOrder() {
        $order1 = new Order("10","10","10");
    }

    function cancelOrder() {

    }

    function payOrder() {

    }

    function Login($email,$password) {
        $date = date('Y-m-d H:i:s');
        if (DB::query('SELECT email FROM users WHERE email=:email', array(':email'=>$email)))
        {
            if (password_verify($password, DB::query('SELECT password FROM users WHERE email=:email', array(':email'=>$email))[0]['password']))
            {
                echo '<script>alert("Logged In!")</script>';
                $cstrong = True;
                $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));

                $userData = DB::query('SELECT * FROM users WHERE email=:email', array(':email'=>$email))[0];

                DB::query('INSERT INTO login_tokens VALUES (\'\', :token, :user_id, :date)', array(':token'=>sha1($token), ':user_id'=>$userData['id'],':date'=>$date));

                setcookie("USR", $token, time() + 60 * 60 * 24 * 7, '/', NULL, NULL, TRUE);
                setcookie("USR_", '1', time() + 60 * 60 * 24 * 3, '/', NULL, NULL, TRUE);

                $user = new User($userData['id'],$userData['firstName'],$userData['lastName'],$userData['email'],$userData['phoneNumber'],$userData['password'],$userData['ordersCount'],$userData['location']);

                $_SESSION["User"] = serialize($user);
            } 
            else 
            {
                echo '<script>alert("Wrong Password")</script>';
            }
        }
        else 
        {
            echo '<script>alert("Not Registered")</script>';
        }
    }

    function Signup($id,$firstName,$lastName,$email,$phoneNumber,$password,$ordersCount,$location) {

        // ! Missing Validations 

        DB::query("INSERT INTO users VALUES(\'\',:firstName,:lastName,:email,:phoneNumber,:password,:ordersCount,:location)",
            array(":firstName" => $firstName,
                ":lastName" => $lastName,
                ":email" => $email,
                ":phoneNumber" => $phoneNumber,
                ":password" => password_hash($password, PASSWORD_BCRYPT),
                ":ordersCount" => $ordersCount,
                ":location" => $location)
        );
    }
}

?>