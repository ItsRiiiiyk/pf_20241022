<?php 
    function salam($waktu, $nama) {
        return "Selamat $waktu, $nama!" ;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= Salam("Pagi", "itsRiiiiyk"); ?></h1>
    <!-- <h1>Selamat Pagi Administrator</h1> -->
    
</body>
</html>