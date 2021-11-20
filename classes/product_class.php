
<?php
// palmers,tee tree, cetaphil, cerave,mgl naturals

require('../settings/db_class.php');

class Product extends Connection{

    function viewAllPalmers(){
        $query = "select * from products where product_brand = 'palmers' order by product_id;";
        return $this->fetch($query);
    }

    function viewAllTea(){
        $query = "select * from products where product_brand = 'tea_tree' order by product_id;";
        return $this->fetch($query);
    }

    function viewAllCetaphil(){
        $query = "select * from products where product_brand = 'cetaphil' order by product_id ;";
        return $this->fetch($query);
    }

    function viewAllCerave(){
        $query = "select * from products where product_brand = 'cerave'  order by product_id;";
        return $this->fetch($query);
    }

    function viewAllMgl(){
        $query = "select * from products where product_brand = 'mgl' order by product_id;";
        return $this->fetch($query);
    }

    function checkProduct($product_title) {
        $query = "select * from products where product_title = '$product_title';";
        return $this->fetch($query);
    }

    function  addProduct($product_title,$price,$img,$keywords) {
        $query = "insert into products(product_title,product_price,product_image,product_keywords) values('$product_title','$price','$img','$keywords');";
        return $this->query($query);
    }

    function  deleteOneProduct($product_id) {
        $query = "delete from products where product_id = '$product_id';";
        return $this->query($query);
    }

    function productCount(){
        $query = "SELECT COUNT(product_id) from products;";
        return $this->query($query);
    }




}

?>