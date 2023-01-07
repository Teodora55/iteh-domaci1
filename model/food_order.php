<?php 

class Food_order{
    
    private $username;
    private $order_name;
    private $order_date;
    private $id;
    private $amount;
    
    public function __construct($username=null,$order_name=null,$order_date=null,$amount = null){
        $this->username = $username;
        $this->order_name = $order_name;
        $this->order_date = $order_date;
        $this->amount = $amount;
    }

    public static function usersOrders($conn,$username){
        $upit = "select * from food_order where username='$username'";
        return $conn->query($upit); 
    }

    public static function newOrder($conn,$order){
        $upit = "INSERT INTO food_order (username, order_name, order_date, amount) VALUES ('$order->username', '$order->order_name', '$order->order_date', $order->amount)";
        return $conn->query($upit); 
    }

}
?>