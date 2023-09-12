<?php 
    include "../tools.php";
    if($_SERVER["REQUEST_METHOD"]=="GET"){
        $id=$_GET['id'];
        $sql="delete from customer where kode_customer='$id'";
        delete($sql);
    }
?>