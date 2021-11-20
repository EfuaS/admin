<?php

require('../classes/people_class.php');


function admin_login_controller ($email){
    
    $admin_actions = new People();

    return $admin_actions->admin_login ($email);
}

function customerCheckcontroller ($email){
    
    $admin_actions = new People();

    return $admin_actions->customer_check ($email);
}


function viewAllCustomersController(){
    
    $admin_actions = new People();

    return $admin_actions->viewAllCustomers();
}

function viewAllAdminsController(){
    
    $admin_actions = new People();

    return $admin_actions->viewAllAdmins();
}

function addCustomerController ($name,$email,$pswd,$country,$city,$contact,$role){
    
    $admin_actions = new People();

    return $admin_actions->addCustomer($name,$email,$pswd,$country,$city,$contact,$role);
}

function deleteOneCustomerController($customer_id){
    
    $admin_actions = new People();

    return $admin_actions->deleteOneCustomer($customer_id);
}

function customerCountController(){
    
    $admin_actions = new People();

    return $admin_actions->customerCount();
}











?>