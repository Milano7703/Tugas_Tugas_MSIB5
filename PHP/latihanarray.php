<?php
$ar_buah = ['Pepaya','Mangga','Pisang','Jambu'];
$ar_buah[2] = 'Jeruk'; //buah pisang ganti dgn jeruk
unset($ar_buah[0]); //hapus buah jambu
//tambah buah baru
$ar_buah[] = 'Naga';
$ar_buah[] = 'Apel';
$ar_buah[] = 'Sawo';
$ar_buah[] = 'momok';

foreach($ar_buah as $id=> $buah){
    echo '<br> key array buah :'.$id;
}
foreach($ar_buah as $buah){
    echo '<br> key Data buah :'.$buah;
}
?>
