<?php 
// var_dump($_SERVER)
// echo $_SERVER["SERVER_NAME"];

$mahasiswa = [
    [
        "nama" => "ItsRiiyk",
        "nim" => "20241022",
        "email" => "itsriiiyk@gmail.com",
        "jurusan" => "PTI"
    ],
    [
        "nama" => "Bambang",
        "nim" => "20241021",
        "email" => "bambang@gmail.com",
        "jurusan" => "PTI"
    ],
    [
        "nama" => "Cok Ruwet",
        "nim" => "45623423",
        "email" => "ruwetcok@gmai.com",
        "jurusan" => "PTI"
    ]
  ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Array Asosiatif</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ( $mahasiswa as $mhs ) : ?>
            <li>
                <a href="latihan2.php?nama=<?=$mhs["nama"]?>"
                ><?=$mhs["nama"];?></a>
            </li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>