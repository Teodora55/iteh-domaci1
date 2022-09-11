<?php 
class User{
    private $username;
    private $email;
    private $password;
    private $firstname;
    private $lastname;
    
    public function __construct($username=null,$email=null,$password=null,$firstname=null,$lastname=null){
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public static function loginUser($conn,$user){
        $upit = "select * from user where email='$user->email' and password= '$user->password'";

        return $conn->query($upit); 
    }

    public static function registerUser($conn,$user){
        $upit = "insert into user(username,email,password,firstname,lastname) values('$user->username','$user->email','$user->password','$user->firstname','$user->lastname')";

        return $conn->query($upit); 
    }


}


?>