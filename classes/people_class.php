
<?php

require('../settings/db_class.php');

class People extends Connection{

    function admin_login ($email){
        return $this->fetch("SELECT * FROM customer WHERE customer_email='$email' AND user_role = 1 ;");
    }
    // return $this->query("select count(customer_email) from customer where customer_email = '$email';");

    function customer_check ($email){
        return $this->fetch("SELECT * FROM customer WHERE customer_email='$email';");
    }

    function viewAllCustomers(){
        $query = "select * from customer where user_role = 2 order by customer_id;";
        return $this->fetch($query);
    }

    function viewAllAdmins(){
        $query = "select * from customer where user_role = 1 ;";
        return $this->fetch($query);
    }

    function customerCount(){
        $query= "SELECT COUNT(customer_id) FROM customer where user_role = 2;";
        return $this->query($query);

    }


    function addCustomer($name,$email,$pswd,$country,$city,$contact,$role){
		// query to insert into table customer
        return $this->query("insert into customer(customer_name, customer_email, customer_pass, customer_country, customer_city, customer_contact,user_role) values('$name','$email','$pswd','$country','$city','$contact','$role');");

    }

    function editCustomer($name,$country,$city,$contact, $id){
        // update record for specified customer
        return $this->query("update customer set customer_name ='$name' ,customer_country = '$country', customer_city = '$city' ,customer_contact = '$contact' where customer_id =' $id';");
    }

    function deleteOneCustomer($customer_id){
        // delete specified customer record
        return $this->query("delete from customer where customer_id = '$customer_id';");
    }



}

?>