<?php 
// date
// menampilkan tanggal dengan format tertentu
// echo date("l, d-m-y");

//  time
//  UNIX Timestamp / EPOCH time
//  detik yang sudah berlalu sejak 1 januari 1970
//  echo time ( );
// echo date("l d M y" , time()-60*60*24*7999 );

// mktime
// membuat sendiri detik dari 1 januari 1970 sampai waktu yang diinginkan
// jam, menit, detik, bulan, tanggal, tahun
// echo mktime( 0,0,0,9,6,2000 );
// echo date("l d M Y" , mktime(0,0,0,9,6,2000 ));

// strtotime
$date = strtotime ("6 Sep 2000") ;
echo date("l d M Y" ,strtotime ( "6 Sep 2000"));


?>