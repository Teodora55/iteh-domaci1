<?php 
class User{
    private $username;
    private $email;
    private $password;
    private $firstname;
    private $lastname;
    
    public function __construct($username,$email,$password,$firstname,$lastname){
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

    public static function getUserByEmail($email,$conn){
        $upit = "select * from user where email='$email'";

        $myArray = array();
        $result= $conn->query($upit);
        if($result){
            while($row = $result->fetch_object()){
                $myArray[] = $row;
            }
        }
        return  $myArray[0] ;
    }

}


?>