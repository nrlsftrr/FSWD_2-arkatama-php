<?php
// Menentukan jumlah baris
$baris = 5;

// Perulangan untuk membuat baris bintang
for ($i = 1; $i <= $baris; $i++) {
    // Perulangan untuk membuat kolom bintang pada setiap baris
    for ($j = $baris; $j >= $i; $j--) {
        echo "*";
    }
    // Mencetak baris baru setelah setiap baris bintang terbentuk
    echo "<br>";
}
?>
