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
}


?>