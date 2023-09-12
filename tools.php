<?php
  include "config.php";

  /**Function select, mengeksekusi query select data 
   * @param query dalam sql
   * @return mysqli_result object.
   **/
  function select($sql){
    global $conn;
    $result = $conn->query($sql);
    return $result;
  }

  /**Function insert, mengeksekusi query untuk insert data 
   * dan meredirect ke halaman index.html
   * @param query dalam sql
   * 
   **/
  function insert($sql,$location){
    global $conn;
    if($conn->query($sql)){
        echo "berhasil";
        header("location:http://localhost/company/customer/");
    }else{
        echo "error";
    }
  }

   /**Function update, mengeksekusi query untuk update data
   * dan meredirect ke halaman index.html
   * @param query dalam sql
   * 
   **/
  function update($sql,$location){
    global $conn;
    if($conn->query($sql)){
        echo "update berhasil";
        header("location:http://localhost/company/customer/");
    }else{
        echo "update gagal";
    }
  }

    /**Function delete, mengeksekusi query untuk delete data
   * dan meredirect ke halaman index.html
   * @param query dalam sql
   * 
   **/
  function delete($sql,$location){
    global $conn;
    if($conn->query($sql)){
        echo "delete berhasil";
        header("location:http://localhost/company/customer/");
    }else{
        echo "delete gagal";
    }
  }
  ?>