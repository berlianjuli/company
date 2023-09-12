<?php
include "../tools.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $kode_customer=$_POST['kode_customer'];
    $nama_customer=$_POST['nama_customer'];
    $alamat=$_POST['alamat'];
    $kota=$_POST['kota'];
    $email=$_POST['email'];
    $hp=$_POST['hp'];
    $sql="update customer set nama_customer='$nama_customer',alamat='$alamat',kota='$kota',email='$email',hp='$hp' where kode_customer='$kode_customer'";
    update($sql,"customer");
}
?>