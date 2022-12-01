<?php 
// array multidimensi
// arrau=y di dalam array

$mahasiswa = [
    ["ItsRiiyk", "20241022", "TI", "itsriiyk@gmail.com"],
    ["Bambang", "2024021", "TI", "bambang@gmail.com"],
    ["Cok Ruwet", "34892093", "TI", "ruwetcok@gmail.com"]
];

// echo $mahasiswa[0][2];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Array Multidimensi</title>
</head>
<body>
    <h1>Daftar Biodata Mahasiswa</h1>

    <ul>
        <?php foreach ( $mahasiswa as $mhs) : ?>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NIM :<?= $mhs[1]; ?></li>
        <li>Jurusan :<?= $mhs[2]; ?></li>
        <li>Email: <?= $mhs[3]; ?></li>
        <br>
    <?php endforeach; ?>
    </ul>
    
</body>
</html>