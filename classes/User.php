<?php
include ("Order.php");
class User extends Person {
    private $ordersCount;
    private $location;

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

    function makeOrder($myOrder) {
        $order1 = new Order($this->getId(),"10");
        $order1->createOrder($myOrder);
    }

    function cancelOrder() {

    }

    function payOrder() {

    }

    public static function Login($email,$password) {
        $date = date('Y-m-d H:i:s');
        if (DB::query('SELECT email FROM users WHERE email=:email', array(':email'=>$email)))
        {
            if (password_verify($password, DB::query('SELECT password FROM users WHERE email=:email', array(':email'=>$email))[0]['password']))
            {
                echo '<script>alert("Logged In!")</script>';
                $cstrong = True;
                $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));

                $userData = DB::query('SELECT * FROM users WHERE email=:email', array(':email'=>$email))[0];

                DB::query('INSERT INTO login_tokens VALUES (\'\', :token, :user_id, :date)', array(':token'=>sha1($token), ':user_id'=>$userData['user_id'],':date'=>$date));

                setcookie("USR", $token, time() + 60 * 60 * 24 * 7, '/', NULL, NULL, TRUE);
                setcookie("USR_", '1', time() + 60 * 60 * 24 * 3, '/', NULL, NULL, TRUE);

                $user = new User($userData['user_id'],$userData['firstName'],$userData['lastName'],$userData['email'],$userData['phoneNumber'],$userData['password'],$userData['ordersCount'],$userData['location']);

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

    public static function Signup($firsttName,$lastName,$email,$phoneNumber,$password,$ordersCount,$location) {

        // ! Missing Validations 

        DB::query("INSERT INTO users VALUES(NULL,:firstName,:lastName,:email,:password,:phoneNumber,:ordersCount,:location,0)",
            array(":firstName" => $firsttName,
                ":lastName" => $lastName,
                ":email" => $email,
                ":phoneNumber" => $phoneNumber,
                ":password" => password_hash($password, PASSWORD_BCRYPT),
                ":ordersCount" => $ordersCount,
                ":location" => $location)
        );
    }

    /**
     * Get the value of ordersCount
     */ 
    public function getOrdersCount()
    {
        return $this->ordersCount;
    }

    /**
     * Set the value of ordersCount
     *
     * @return  self
     */ 
    public function setOrdersCount($ordersCount)
    {
        $this->ordersCount = $ordersCount;

        return $this;
    }

    /**
     * Get the value of location
     */ 
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set the value of location
     *
     * @return  self
     */ 
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }
}

?>