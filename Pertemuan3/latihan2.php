<?php 
// Kondidi atau percabangan
// if else
// if else if else
// ternary
// switch


// if
// $x = 10;
// if( $x < 20 ) {
//     echo "Benar" ;
// }
// echo "Salah" ;

// if else if
// $x = 10;
// if ( $x < 20 ) {
//     echo "benar ";
// }
// else if ( $x == 20 ) {
//     echo "bingo";
// }
// else {
//     echo "salah";
// }

$n = 63;
if( $n < 50 ) {
    echo " E ";
}
else if ( $n >= 51 && $n <= 60 ) {
    echo " D ";
}
else if ( $n >= 61 && $n <= 70 ) {
    echo " C ";
}
else if ( $n >= 71 && $n <= 80 ) {
    echo " B ";
}
else {
    echo " A ";
}


?>