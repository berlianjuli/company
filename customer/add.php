<?php
include "../tools.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode_customer = $_POST['kode_customer'];
    $nama_customer = $_POST['nama_customer'];
    echo strlen($nama_customer);
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $email = $_POST['email'];
    $hp = $_POST['hp'];
    $sql = "insert into customer(nama_customer,alamat,kota,email,hp) values ('$nama_customer','$alamat','$kota','$email','$hp')";
    insert($sql, "customer");
}
