<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "../tools.php";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $keysearch = $_POST['search'];
        $sql = "select * from customer where nama_customer like '%$keysearch%' or kode_customer like '%$keysearch%' or alamat like '%$keysearch%' or kota like '%$keysearch%'";
    } else {

        $sql = "SELECT * from customer";
    }
    $hasil = select($sql);
    $awal = microtime(true);
    ?>
    <br>
    <a href="form_add.php">Tambah Customer</a>
    <form action="index.php" method="POST">
        <label>Cari</label>
        <input type="text" name="search" />
        <input type="submit" />
    </form>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>Email</th>
                <th>HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while ($data = $hasil->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['kode_customer']; ?></td>
                    <td><?php echo $data['nama_customer']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['kota']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['hp']; ?></td>
                    <td><a href="formEdit.php?id=<?php echo $data['kode_customer']; ?>">Edit</a>||<a href="delete.php?id=<?php echo $data['kode_customer']; ?>">Delete</a></td>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>
    <?php $akhir = microtime(true);
    $hasil = $akhir - $awal;
    echo "Time Execution $hasil";
    ?>
</body>

</html>