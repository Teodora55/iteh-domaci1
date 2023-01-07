<?php
include '../dbb.php';
include '../model/food_order.php';

if(isset($_POST["idkorisnika"]) && isset($_POST["selector"]) && isset($_POST["amount"]) ){
  $food = $_POST['selector'];
  $amount = $_POST['amount'];
  $username = $_POST['idkorisnika'];

  $order = new Food_order($username, $food, date('Y-m-d'), $amount);
  $status = Food_order::newOrder($conn,$order);

   if($status){
      echo 'Success';
   }else{
       echo $status;
       echo 'Failed';
   }
}

?>
