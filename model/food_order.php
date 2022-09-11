<?php 

class Food_order{
    
    private $username;
    private $order_name;
    private $date;
    private $id;
    
    public function __construct($username=null,$order_name=null,$date=null,$id=null){
        $this->username = $username;
        $this->order_name = $order_name;
        $this->date = $date;
        $this->id = $id;
    }
}



?>