<?php

$pemasukan = 50000000;
$hutang_a = 16500000;
$bunga_a = 0.05;
$hutang_b = 9500000;
$bunga_b = 0.045;

$bunga_hutang_a = $hutang_a * $bunga_a;
$bunga_hutang_b = $hutang_b * $bunga_b;

$total_bunga = $bunga_hutang_a + $bunga_hutang_b;

$total_hutang = ($hutang_a + $bunga_hutang_a) + ($hutang_b + $bunga_hutang_b);

$sisa_uang = $pemasukan - $total_hutang;

echo "=== HASIL PERHITUNGAN ===<br>";
echo "Total Bunga Hutang: Rp " . number_format($total_bunga, 0, ',', '.') . "<br>";
echo "Total Hutang (Pokok + Bunga): Rp " . number_format($total_hutang, 0, ',', '.') . "<br>";
echo "Sisa Uang: Rp " . number_format($sisa_uang, 0, ',', '.') . "<br>";
?>
