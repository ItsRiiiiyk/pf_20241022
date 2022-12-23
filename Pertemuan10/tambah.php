<?php 

    require 'functions.php';

    // cek apakah tombol submit sudah di tekan atau belum
    if( isset ($_POST ["submit"]) ) {

        // apakah data berhasil ditambah ke database atau tidak
        if( tambah($_POST) > 0) {
            echo "
                <script>
                    alert('data berhasil ditambahkan!');
                    document.location.href = 'index.php';
                 </script>
            
            ";
        } else {
            echo "
            <script>
                    alert('data gagal ditambahkan!');
                    document.location.href = 'index.php';
                 </script>
                
            ";

        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Tambah Data</title>
</head>
<body>
    <form action="" method="post">


        <ul>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim">
            </li>
            <li>
                <label for="nama">Nama :</label>
                <input type="text"name="nama" id="nama">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text"name="email" id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text"name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">Photo :</label>
                <input type="text"name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Simpan</button>
            </li>
        </ul>


    </form>

    <a href="index.php">Kembali..</a>
    
</body>
</html>