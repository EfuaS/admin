<?php
require('../controllers/people_controller.php');

// add new customer process
 if(isset($_POST['addCust'])){
    // retrieve form details
    $name = $_POST['name'];
    $email = $_POST['mail'];
    $pswd = $_POST['pass'];
    $pass_hash = password_hash($pswd,PASSWORD_DEFAULT);
    $country = $_POST['country'];
    $city = $_POST['city'];
    $contact = $_POST['contact'];
    $role = $_POST['role'];


    $email_check = customerCheckcontroller ($email);
    if($email_check > 0)
    {            
                    
                   header("location:../view/customer_table.php?exits=true"); 
                   exit(); 
              }  
              else  
              {  
                addCustomerController ($name,$email,$pass_hash,$country,$city,$contact,$role);
                header("location:../view/customer_table.php"); 
                exit(); 



              }  
           
    

 }

// delete btn process
 if(isset($_POST["custdelbtn"])){

    $customer_id = $_POST['custdel'];
    deleteOneCustomerController($customer_id);
    header("location:../view/customer_table.php"); 
        exit(); 
     }


     // delete btn process
 if(isset($_POST["custdelbtn"])){

   $customer_id = $_POST['custdel'];
   deleteOneCustomerController($customer_id);
   header("location:../view/customer_table.php"); 
       exit(); 
    }

    $cust_id = null;
if (isset($_POST["custeditbtn"])) {
   $cust_id = $_POST['custedit'];
   header("location:../actions/update.php?id=<?php echo $cust_id; ?>"); 
 
}

?>