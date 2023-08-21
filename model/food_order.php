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

    public static function deleteOrder($conn,$id) {
        $sql = "DELETE FROM food_order WHERE id = '$id'";
        return $conn->query($sql);
    }

    public static function changeAmount($conn,$id,$amount) {
        $query = "UPDATE food_order SET amount = ? WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("di", $amount, $id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

}
?>