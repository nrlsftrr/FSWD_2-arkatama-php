<?php
// Menentukan jumlah baris
$baris = 12;

// Perulangan untuk membuat baris @
for ($i = 1; $i <= $baris; $i++) {
    // Perulangan untuk membuat kolom @ pada setiap baris
    for ($j = $baris; $j >= $i; $j--) {
        echo "@";
    }
    // Mencetak baris baru setelah setiap baris @ terbentuk
    echo "<br>";
}
?>
