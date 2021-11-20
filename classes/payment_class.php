
<?php

require('../settings/db_class.php');

class Payment extends Connection{

    function viewAllPayments(){
        $query = "select * from payment order by pay_id;";
        return $this->fetch($query);
    }

    function checkPayment($order_id){
        $query = "select * from payment where order_id = '$order_id';";
        return $this->fetch($query);
    }

    function addPayment($cid,$curr,$amt,$orderid,$date){
		// query to insert into table customer
        return $this->query("insert into customer(customer_id,currency,amount,order_id,payment_date) values('$cid','$curr','$amt','$orderid','$date');");

    }

    function  deleteOnePayment($pay_id){
        $query = "delete from payment where pay_id = '$pay_id';";
        return $this->queyr($query);
    }

   

}

?>