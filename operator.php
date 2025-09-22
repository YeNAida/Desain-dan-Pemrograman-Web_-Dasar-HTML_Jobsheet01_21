<?php
$a = 10;
$b = 5;

// Artimatika
$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Penjumlahan     : $hasilTambah <br><br>";
echo "Hasil Pengurangan     : $hasilKurang <br><br>";
echo "Hasil Perkalian       : $hasilKali<br><br>";
echo "Hasil Pembagian       : $hasilBagi<br><br>";
echo "Hasil Sisa Pembagian  : $sisaBagi<br><br>";
echo "Hasil Pangkat         : $pangkat<br><br><br><br>";

// Pembanding
$hasilSama = $a == $b;
$hasilTidaksama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSamaDengan = $a <= $b;
$hasilLebihBesarSamaDengan = $a >= $b;


echo "Hasil Pembanding Sama Dengan : " . ($hasilSama ? 'true' : 'false') . "<br><br>";
echo "Hasil Pembanding Tidak sama : " . ($hasilTidaksama ? 'true' : 'false') . "<br><br>";
echo "Hasil Pembanding Lebih Kecil : " . ($hasilLebihKecil ? 'true' : 'false') . "<br><br>";
echo "Hasil Pembanding Lebih Besar : " . ($hasilLebihBesar ? 'true' : 'false') . "<br><br>";
echo "Hasil Pembanding Lebih Kecil Sama Dengan : " . ($hasilLebihKecilSamaDengan ? 'true' : 'false') . "<br><br>";
echo "Hasil Pembanding Lebih Besar Sama Dengan : " . ($hasilLebihBesarSamaDengan ? 'true' : 'false') . "<br><br><br>";

// Bitwise
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilXOR =$a ^$b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil Bitwise and : ".($hasilAnd ? 'true':'false')."<br><br>";
echo "Hasil Bitwise Or : $hasilNotA".($hasilAnd ? 'true':'false')."<br><br>";
echo "Hasil Bitwise XOR : $hasilXOR <br><br>";
echo "Hasil Bitwise NOT A : $hasilNotA".($hasilAnd ? 'true':'false')."<br><br>";
echo "Hasil Bitwise NOT B : $hasilNotB".($hasilAnd ? 'true':'false')."<br><br>";

// Penugasan
$a += $b;
echo "Hasil Operator Penugasan dengan Penjumlahan : $a <br>";
$a -= $b;
echo "Hasil Operator Penugasan dengan Pengurangan : $a <br>";
$a *= $b;
echo "Hasil Operator Penugasan dengan perkalian : $a <br>";
$a /= $b;
echo "Hasil Operator Penugasan dengan Pembagian : $a <br>";
$a %= $b;
echo "Hasil Operator Penugasan dengan Sisa Bagi : $a <br><br>";

// Operator Identik
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Operator identik : ".($hasilIdentik ? 'true':'false')."<br><br>";
echo "Hasil Operator Tidak identik : ".($hasilTidakIdentik ? 'true':'false')."<br><br>";

// Soal no 3.6
$kursi = array(
    "total" => 45,
    "terisi" => 28
);

$sisaKursi = $kursi["total"] - $kursi["terisi"];
$persentaseKosong = ($sisaKursi / $kursi["total"]) * 100;

echo "Jumlah kursi yang masih kosong adalah: " . $sisaKursi . " kursi.<br>";
echo "Persentase kursi yang masih kosong adalah: " . round($persentaseKosong, 2) . "%";
?>