<?php
// Menentukan jumlah baris
$baris = 5;

// Perulangan untuk membuat baris bintang
for ($i = 1; $i <= $baris; $i++) {
    // Perulangan untuk membuat kolom spasi pada setiap baris
    for ($j = 1; $j <= ($i - 1); $j++) {
        echo "&nbsp;&nbsp;";
    }
    // Perulangan untuk membuat kolom bintang pada setiap baris
    for ($k = $baris; $k >= $i; $k--) {
        echo "*";
    }
    // Mencetak baris baru setelah setiap baris bintang terbentuk
    echo "<br>";
}
?>
