
<?php

require('../classes/product_class.php');



function viewAllPalmersController(){
    
    $admin_actions = new Product();
    return $admin_actions->viewAllPalmers();
}

function viewAllTeaController(){
    
    $admin_actions = new Product();
    return $admin_actions->viewAllTea();
}

function viewAllCetaphilController(){
    
    $admin_actions = new Product();
    return $admin_actions->viewAllCetaphil();
}

function viewAllCeraveController(){
    
    $admin_actions = new Product();
    return $admin_actions->viewAllCerave();
}

function viewAllMglController(){
    
    $admin_actions = new Product();
    return $admin_actions->viewAllMgl();
}

function checkProductController($product_title){
    
    $admin_actions = new Product();
    return $admin_actions->checkProduct(product_title);
}

function addProductController($product_title,$price,$img,$keywords){
    
    $admin_actions = new Product();
    return $admin_actions->addProduct($product_title,$price,$img,$keywords);
}

function deleteOneProductController($id){
    
    $admin_actions = new Product();
    return $admin_actions->deleteOneProduct($id);
}

function productCountController(){
    
    $admin_actions = new Product();
    return $admin_actions->productCount();
}




?>