<?php
function cetakBintang($angka)
{
    for ($i = $angka; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}

$angkaInput = 10; // Angka terbesar yang diinput
cetakBintang($angkaInput);
?>
