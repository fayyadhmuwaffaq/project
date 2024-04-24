<?php
require 'function.php';

if (isset($_POST['cari'])){
    $perpustakaan = cari($_POST["keyword"]);
} else {
    $perpustakaan = query("SELECT * FROM perpustakaan");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <a href="tambah.php">Tambah Buku</a><br><br>
    <form action="" method="post">
        <input type="text" name="keyword" autofocus placeholder="Tulis pencarianmu disini.." autocomplete="off" size="20">
        <button type="submit" name="cari">Cari</button><br><br>
    </form>
<table border="1" cellpadding="10" cellspacing = "0">
<tr>
    <th>No.</th>
    <th>Aksi</th>
    <th>Buku</th>
    <th>Kategori</th>
    <th>Penulis</th>
    <th>Penerbit</th>
    <th>Keterangan</th>
</tr>
    <?php $i = 1; ?>
    <?php 
        foreach ($perpustakaan as $row) :?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="update.php?id=<?= $row["id"]; ?>">update </a>
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick=" return confirm('Apakah anda yakin ingin menghapus data ini?')">delete</a>
        </td>
        <td><?= $row["buku"]; ?></td>
        <td><?= $row["kategori"]; ?></td>
        <td><?= $row["penulis"]; ?></td>
        <td><?= $row["penerbit"]; ?></td>
        <td><?= $row["keterangan"]; ?></td>
    </tr>
    <?php $i++?>
    <?php endforeach;?>
</table>
</body>
</html>