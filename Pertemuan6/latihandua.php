<?php 
 

// Array Associative
// definisinya sama dengan array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    ["nama" => "ItsRiiyk",
     "nim" => "20241022",
     "email" => "itsriiiyk@gmail.com",
     "jurusan" => "PTI"
    ],
    ["nama" => "Bambang",
                "nim" => "20241021",
                "email" => "bambang@gmail.com",
                "jurusan" => "PTI"
    ],
    ["nama" => "Cok Ruwet",
                "nim" => "45623423",
                "email" => "ruwetcok@gmai.com",
                "jurusan" => "PTI"
    ]
  ];

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <title>Array Associative</title>
 </head>
 <body>
    <H1>Daftar Mahasiswa</H1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>Nim : <?= $mhs["nim"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
    
 </body>
 </html>