<?php

require('../controllers/order_controller.php');

//delete button process for order table
if(isset($_POST["ordelbtn"])){

$order_id = $_POST['ordel'];
deleteOneOrderController($order_id);
header("location:../view/orders_table.php"); 
    exit(); 
 }


//delete button process for customer table
    

 
    
?>
