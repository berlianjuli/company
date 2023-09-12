<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Tambah Customer</h3>
    <form action="add.php" method="post">
    <label>Nama </label>
    <input type="text" name="nama_customer" required/><br>
    <label>Alamat </label>
    <input type="text" name="alamat" required/><br>
    <label>Kota </label>
    <input type="text" name="kota" required/><br>
    <label>Email </label>
    <input type="email" name="email" required/><br>
    <label>HP </label>
    <input type="number" name="hp" required/><br>
    <input type="submit" value="submit"/>
    </form>
</body>
</html>