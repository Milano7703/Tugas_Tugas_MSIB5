<?php
//array scalar
$b1 = ['kode'=>'a1', 'buah'=>'Apel', 'harga'=>25000];
$b2 = ['kode'=>'a2', 'buah'=>'Anggur', 'harga'=>45000];
$b3 = ['kode'=>'b1', 'buah'=>'Belimbing', 'harga'=>15000];
$b4 = ['kode'=>'b2', 'buah'=>'Bangkuang', 'harga'=>10000];
$b5 = ['kode'=>'c1', 'buah'=>'Cerry', 'harga'=>35000];
//array associative
$buah2an = [$b1, $b2, $b3, $b4, $b5];

//deklarasi header table
$ar_judul = ['no', 'kode','buah','harga'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menggunakan array looping</title>
</head>
<body>
    <h3 align="center">Daftar buah buahan</h3>
    <table>
        <thead>
            <tr>
                <?php foreach($ar_judul as $judul){
                    ?>
                    <th></=judul ?></th>
                    <?php
                } ?>
            </tr>
        </thead>
    </table>
</body>
</html>
