
<?php

require('../settings/db_class.php');

class Order extends Connection{

    function viewAllOrders(){
        $query = "select * from orders order by order_id ;";
        return $this->fetch($query);
    }

    function deleteOneOrder($id){
        $query = "DELETE FROM  orders where order_id = '$id' ;";
        return $this->query($query);
    }

    // 2147483647

}

?>