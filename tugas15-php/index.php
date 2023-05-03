<?php
// Membuat fungsi untuk mencetak pola bintang
function print_pattern($rows)
{
    // Perulangan untuk membuat baris pola bintang
    for ($i = 1; $i <= $rows; $i++) {
        // Perulangan untuk membuat kolom pola bintang
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}

// Memanggil fungsi untuk mencetak pola bintang dengan 5 baris
print_pattern(5);
?>