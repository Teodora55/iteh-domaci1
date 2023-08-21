<?php
include '../dbb.php';
include '../model/food_order.php';

if(isset($_POST["id"]) && isset($_POST["amount"])){
  $id = $_POST['id'];
  $amount = $_POST['amount'];

  $status = Food_order::changeAmount($conn,$id,$amount);

   if($status){
      echo 'Success';
   }else{
       echo $status;
       echo 'Failed';
   }
}

?>