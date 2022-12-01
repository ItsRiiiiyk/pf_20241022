<?php 
// menampilkan isi array dengan for | foreach

$angka =[2,3,4,46,8,65,47,98,44,23];
$numbers =[4,7,8,98,45,78,32,6,9,65];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: aqua;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php for( $i = 0; $i < count($angka); $i++) :?>
        <div class="kotak"><?= $angka [$i]  ?></div>  
    <?php endfor; ?>

    <div class="clear"></div>

    <?php foreach( $numbers as $number) : ?>
        <div class="kotak"><?= $number;  ?></div>
    <?php endforeach; ?>
</body>
</html>
