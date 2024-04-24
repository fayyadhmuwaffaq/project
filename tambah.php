<?php
require 'function.php' ;

if ( isset($_POST["submit"])){

    if (tambah($_POST) > 0 ){
        echo "<script>
                alert('Data Berhasil');
                document.location.href = 'index.php';
              </script>";
    }else {
        echo "<script>
                alert('Data Tidak Berhasil');
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
    <h1>Tambah Data Buku</h1>
<form action="" method="post">
    <ul>
        <li>
            <label for="buku">Buku</label>
            <input type="text" name="buku" id="buku" require>
        </li>
        <li>
            <label for="kategori">Kategori</label>
            <input type="text" name="kategori" id="kategori" require>
        </li>
        <li>
            <label for="penulis">Penulis</label>
            <input type="text" name="penulis" id="penulis" require>
        </li>
        <li>
            <label for="penerbit">Penerbit</label>
            <input type="text" name="penerbit" id="penerbit" require>
        </li>
        <li>
            <label for="keterangan">Keterangan</label>
            <input type="text" name="keterangan" id="keterangan" require>
        </li>
        <li>
            <button type="submit" name="submit">Tambah Data</button>
        </li>
    </ul>
</form>
</body>
</html>