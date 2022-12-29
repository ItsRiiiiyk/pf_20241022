<?php 

require 'functions.php';

// ambil data via URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiwa
              WHERE id = $id")[0];

// cek data
// var_dump($mhs["nama"]);die;

// cek apakah tombol ubah sudah diklik atau belum
if( isset($_POST["submit"])) {

    // cek apakah data berhasil disimpan ke database atau tidak
    if( ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
             </script>
        
        ";
    } else {
        echo "
        <script>
                alert('data gagal diubah!');
                document.location.href = 'index.php';
             </script>
            
        ";

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Ubah Data</title>
</head>
<body>
    <h1>Halaman Ubah Data</h1>
    <form action="" method="post">
    <input type="hidden" name="id" value="<?= $mhs["id"];?>">
        <ul>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim" required value="<?= $mhs["nim"];?>">
            </li>
            <li>
                <label for="nama">Nama :</label>
                <input type="text"name="nama" id="nama" required value="<?= $mhs["nama"];?>">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text"name="email" id="email" required value="<?= $mhs["email"];?>">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text"name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"];?>">
            </li>
            <li>
                <label for="gambar">Photo :</label>
                <input type="text"name="gambar" id="gambar"required value="<?= $mhs["gambar"];?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah</button>
            </li>
        </ul>


    </form>

    <a href="index.php">Kembali..</a>
    
</body>
</html>