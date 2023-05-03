<?php
// Menentukan jumlah baris
$baris = 6;

// Perulangan untuk membuat baris $
for ($i = 1; $i <= $baris; $i++) {
    // Perulangan untuk membuat kolom $
    for ($j = 1; $j <= $i; $j++) {
        echo "$";
    }
    // Mencetak baris baru setelah setiap baris $ terbentuk 
    echo "<br>";
}
?>

