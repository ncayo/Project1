<?php
// memanggil file atau class_lingkaran.php
require_once 'class_lingkaran.php';
echo "Nilai PHI adalah = " . Lingkaran::PHI;
$lingkar1 = new Lingkaran(10);
$lingkar2 = new Lingkaran(4);
echo "<br>";

// menghitung luas lingkaran menggunakan fungsi getluas
echo "<br> Luas lingkaran I adalah " .$lingkar1->getluas();
echo "<br> Luas lingkaran II  adalah " .$lingkar2->getluas();
echo "<br>";

// menghitung keliling lingkaran menggunakan fungsi getkeliling
echo "<br> Keliling lingkaran I adalah " .$lingkar1->getkeliling();
echo "<br> Keliling lingkaran II adalah " .$lingkar2->getkeliling();

?>