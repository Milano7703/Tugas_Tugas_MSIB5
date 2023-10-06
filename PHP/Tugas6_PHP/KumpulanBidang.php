<?php
require_once 'Bentuk2D.php';
require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'Segitiga.php';

$lingkaran = new Lingkaran(5);
$persegiPanjang = new PersegiPanjang(4, 6);
$segitiga = new Segitiga(3, 4);

$bidang2D = [$lingkaran, $persegiPanjang, $segitiga];

echo '<table border="1">';
echo '<thead>';
echo '<tr>';
echo '<th>No</th>';
echo '<th>Nama Bidang</th>';
echo '<th>Keterangan</th>';
echo '<th>Luas Bidang</th>';
echo '<th>Keliling Bidang</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

foreach ($bidang2D as $key => $bidang) {
    echo '<tr>';
    echo '<td>' . ($key + 1) . '</td>';
    echo '<td>' . $bidang->namaBidang() . '</td>';
    echo '<td>' . ' - ' . '</td>';
    echo '<td>' . $bidang->luasBidang() . '</td>';
    echo '<td>' . $bidang->kelilingBidang() . '</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';
?>
