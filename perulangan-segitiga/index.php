<?php
// Fungsi untuk mencetak pola bintang segitiga siku-siku terbalik ke arah kiri
function triangleUpsideLeft($baris) {
    for ($i = 1; $i <= $baris; $i++) {
        for ($j = $baris; $j >= $i; $j--) {
            echo "*";
        }
        echo "<br>";
    }
}

// Fungsi untuk mencetak pola bintang segitiga siku-siku terbalik ke arah kanan
function triangleUpsideRight($baris) {
    for ($i = 1; $i <= $baris; $i++) {
        for ($j = 1; $j <= ($i - 1); $j++) {
            echo "&nbsp;&nbsp;";
        }
        for ($k = $baris; $k >= $i; $k--) {
            echo "*";
        }
        echo "<br>";
    }
}

// Fungsi untuk mencetak pola bintang segitiga siku-siku terbalik ke arah kiri
function triangleDownsideLeft($baris) {
    for ($i = 1; $i <= $baris; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}

// Fungsi untuk mencetak pola bintang segitiga siku-siku terbalik ke arah kanan
function triangleDownsideRight($baris) {
    for ($i = 1; $i <= $baris; $i++) {
        for ($j = $baris; $j > $i; $j--) {
            echo "&nbsp;&nbsp;";
        }
        for ($k = 1; $k <= $i; $k++) {
            echo "*";
        }
        echo "<br>";
    }
}

// Fungsi untuk memilih pola bintang yang ingin dicetak berdasarkan nama fungsi yang dikirimkan sebagai argument
function printPattern($pattern, $baris) {
    if ($pattern == "triangleUpsideLeft") {
        triangleUpsideLeft($baris);
    } elseif ($pattern == "triangleUpsideRight") {
        triangleUpsideRight($baris);
    } elseif ($pattern == "triangleDownsideLeft") {
        triangleDownsideLeft($baris);
    } elseif ($pattern == "triangleDownsideRight") {
        triangleDownsideRight($baris);
    } else {
        echo "Pattern tidak tersedia";
    }
}

// Memanggil fungsi printPattern untuk mencetak pola bintang segitiga siku-siku terbalik ke arah kanan
printPattern("triangleUpsideRight", 5);
?>
