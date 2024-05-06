<?php
require 'function.php';

if (isset($_POST['cari'])){
    $resep = cari($_POST["keyword"]);
} else {
    $resep = query("SELECT * FROM resep");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>MyCook</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<body>
<nav class="navbar">
        <a href="#" class="logo">MyCook</a>
        <form action="" method="post" class="search-form">
            <input type="text" name="keyword" placeholder="Cari resepmu disini.." autocomplete="off">
            <button type="submit" name="cari">Cari</button>
        </form>
        <a href="tambah.php" class="add-recipe">Tambah Resep</a>
    </nav>
<table border="1" cellpadding="10" cellspacing = "0">
<tr>
    <th>No.</th>
    <th>Gambar</th>
    <th>Nama Resep</th>
    <th>Alat & Bahan</th>
    <th>Cara Membuat</th>
    <th>Aksi</th>
</tr>
    <?php $i = 1; ?>
    <?php 
        foreach ($resep as $row) :?>
    <tr>
        <td><?= $i; ?></td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
        <td><?= $row["nama_resep"]; ?></td>
        <td><?= $row["alat_bahan"]; ?></td>
        <td><?= $row["cara_kerja"]; ?></td>
        <td>
            <a href="update.php?id=<?= $row["id"]; ?>">update </a>
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick=" return confirm('Apakah anda yakin ingin menghapus data ini?')">delete</a>
        </td>
    </tr>
    <?php $i++?>
    <?php endforeach;?>
</table>
</body>
</html>