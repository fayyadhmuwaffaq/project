    <?php
    //koneksi database
    $conn = mysqli_connect("localhost", "root", "", "belajardata");
    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query) ;
        // menyediakan wadahnya
        $rows =[];
        // yg akan di ambil setiap data
        while ( $row = mysqli_fetch_assoc($result)) {
        // menambahkan elemen baru setiap array
            $rows[] = $row;
        }
        //mengembalikan data, rows bentuknya sudah array assosiatif
        return $rows;
    }
        function tambah ($data) {
            global $conn ;
        // ambil data dari tiap elemen dalam form
            $buku           = htmlspecialchars($data["buku"]);
            $kategori       = htmlspecialchars($data["kategori"]);
            $penulis        = htmlspecialchars($data["penulis"]);
            $penerbit       = htmlspecialchars($data["penerbit"]);
            $keterangan     = htmlspecialchars($data["keterangan"]);
        // query insert data
        $query = "INSERT INTO perpustakaan
                    VALUES
                    ('','$buku', '$kategori', '$penulis', '$penerbit', '$keterangan')";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

        function hapus($id){
            global $conn;
            mysqli_query($conn, "DELETE FROM perpustakaan WHERE id = $id");
            
            return mysqli_affected_rows($conn);
    }
        function update ($data) {
            global $conn ;

            $id             = $data["id"];
            $buku           = htmlspecialchars($data["buku"]);
            $kategori       = htmlspecialchars($data["kategori"]);
            $penulis        = htmlspecialchars($data["penulis"]);
            $penerbit       = htmlspecialchars($data["penerbit"]);
            $keterangan     = htmlspecialchars($data["keterangan"]);
    // query insert data
        $query = "UPDATE perpustakaan SET
                    buku        = '$buku',
                    kategori    = '$kategori',
                    penulis     = '$penulis',
                    penerbit    = '$penerbit',
                    keterangan  = '$keterangan'
                WHERE id        = $id
                ";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

    function cari($keyword){
        $query = "SELECT * FROM perpustakaan WHERE buku LIKE '$keyword' OR penulis LIKE '$keyword'
                    ";
        return query($query);
    }
    ?>