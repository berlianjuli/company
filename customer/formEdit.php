<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "../tools.php";
        $id=$_GET['id'];
        $sql="select * from customer where kode_customer=$id";
        $result=select($sql);
        $data=$result->fetch_assoc();
    ?>
    <h3>Edit Customer</h3>
    <form action="edit.php" method="post">
   <label>Kode</label>
    <input type="text" name="kode_customer" value="<?php echo $data['kode_customer']?>" readonly/><br>
    <label>Nama </label>
    <input type="text" name="nama_customer" value="<?php echo $data['nama_customer']?>" required/><br>
    <label>Alamat </label>
    <input type="text" name="alamat" value="<?php echo $data['alamat']?>" required/><br>
    <label>Kota </label>
    <input type="text" name="kota" value="<?php echo $data['kota']?>" required/><br>
    <label>Email </label>
    <input type="text" name="email" value="<?php echo $data['email']?>" required/><br>
    <label>HP </label>
    <input type="number" name="hp" value="<?php echo $data['hp']?>" required/><br>
    <input type="submit" value="submit"/>
    </form>
</body>
</html>