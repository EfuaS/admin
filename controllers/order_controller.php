<?php

require('../classes/order_class.php');



function viewAllOrdersController(){
    
    $order_actions = new Order();

    return $order_actions->viewAllOrders();
}


function deleteOneOrderController($id){
    
    $order_actions = new Order();

    return $order_actions->deleteOneOrder($id)    ;
}






?>