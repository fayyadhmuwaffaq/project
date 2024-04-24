<?php
require 'function.php' ;

$id = $_GET["id"];

$ubahDB = query("SELECT * FROM perpustakaan WHERE id = $id")[0]; 

if ( isset($_POST["submit"])){

    if (update($_POST) > 0 ){
        echo "<script>
                alert('Data Berhasil diupdate');
                document.location.href = 'index.php';
              </script>";
    }else {
        echo "<script>
                alert('Data Tidak Berhasil diupdate');
                document.location.href = 'index.php';
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update Data Buku</h1>
<form action="" method="post">
    <input type="hidden" name="id" value="<?= $ubahDB["id"]; ?>">
    <ul>
        <li>
            <label for="buku">Buku</label>
            <input type="text" name="buku" id="buku" required value="<?= $ubahDB["buku"];?>">
        </li>
        <li>
            <label for="kategori">Kategori</label>
            <input type="text" name="kategori" id="kategori" required value="<?= $ubahDB["kategori"];?>">
        </li>
        <li>
            <label for="penulis">Penulis</label>
            <input type="text" name="penulis" id="penulis" required value="<?= $ubahDB["penulis"];?>">
        </li>
        <li>
            <label for="penerbit">Penerbit</label>
            <input type="text" name="penerbit" id="penerbit" required value="<?= $ubahDB["penerbit"];?>">
        </li>
        <li>
            <label for="keterangan">Keterangan</label>
            <input type="text" name="keterangan" id="keterangan" required value="<?= $ubahDB["keterangan"];?>">
        </li>
        <li>
            <button type="submit" name="submit">Update Data</button>
        </li>
    </ul>
</form>
</body>
</html>