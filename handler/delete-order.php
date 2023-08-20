<?php
include '../dbb.php';
include '../model/food_order.php';

if(isset($_POST["id"])){
  $id = $_POST['id'];

  $status = Food_order::deleteOrder($conn,$id);

   if($status){
      echo 'Success';
   }else{
       echo $status;
       echo 'Failed';
   }
}

?>