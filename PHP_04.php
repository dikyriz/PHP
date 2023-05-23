<?php
function bubbleSort($arr)
{
    $n = count($arr);

    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                // Swap elemen jika elemen saat ini lebih besar dari elemen berikutnya
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }

    return $arr;
}

function hitungRataRata($arr)
{
    $jumlah = count($arr);
    $total = array_sum($arr);
    $rataRata = $total / $jumlah;
    return $rataRata;
}

// Contoh penggunaan
$angka = array(790, 483, 281, 224, 198, 60, 698, 400, 709, 168);

echo "Array sebelum sorting: ";
print_r($angka);

$angka = bubbleSort($angka);

echo "Array setelah sorting: ";
print_r($angka);


$rataRata = hitungRataRata($angka);

echo "Nilai rata-rata: " . $rataRata;
?>
