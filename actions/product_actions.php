<?php
require('../controllers/product_controller.php');




if(isset($_POST['addProduct'])){
    // retrieve form details
    $product_title = $_POST['product_title'];
    $price = $_POST['price'];
    $img = $_POST['img'];
    $keywords = $_POST['key'];
  
    $name_check = checkProductController($product_title);
    if($name_check > 0)
    {            
                    
                   header("location:../view/products_table.php?exits=true"); 
                   exit(); 
              }  
              else  
              {  
                addProductController($product_title,$price,$img,$keywords);
                header("location:../view/payments_table.php"); 
                exit(); 
  
  
  
              }  
           
    
  
  }
  

//delete button process for product cetaphil table
if(isset($_POST["cetadelbtn"])){

    $ceta_id = $_POST['cetadel'];
    deleteOneProductController($ceta_id);
    header("location:../view/products_table.php"); 
        exit(); 
     }

//delete button process for product cerave table
if(isset($_POST["ceradelbtn"])){

    $cera_id = $_POST['ceradel'];
    deleteOneProductController($cera_id);
    header("location:../view/products_table.php"); 
        exit(); 
     }

//delete button process for product tea trea table
if(isset($_POST["teadelbtn"])){

    $tea_id = $_POST['teadel'];
    deleteOneProductController($tea_id);
    header("location:../view/products_table.php"); 
        exit(); 
     }

     //delete button process for product mgl table
if(isset($_POST["mgldelbtn"])){

    $mgl_id = $_POST['mgldel'];
    deleteOneProductController($mgl_id);
    header("location:../view/products_table.php"); 
        exit(); 
     }


     //delete button process for product palmers table

     if(isset($_POST["palmdelbtn"])){

    $palm_id = $_POST['palmdel'];
    deleteOneProductController($palm_id);
    header("location:../view/products_table.php"); 
        exit(); 
        }


?>