<?php
// Soal no 4.1
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <=100) {
    echo "Nilai huruf: A<br><br>";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik<90) {
    echo "Nilai huruf: B<br><br>";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik<80) {
    echo "Nilai huruf: C<br><br>";
} elseif ($nilaiNumerik <70) {
    echo "Nilai huruf: D <br><br>";
}

// Soal no 4.2
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while($jarakSaatIni < $jarakTarget){
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.<br><br>";

// Soal no 4.3
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman =10;
$jumlahBuah = 0;

for($i = 1; $i <= $jumlahLahan; $i++){
    $jumlahBuah += ($tanamanPerLahan*$buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah <br><br>";

// Soal no 4.4
$skorUjian = [85,92,78,96,88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah : $totalSkor<br><br>";

// Soal no 4.5
$nilaiSiswa = [85,92,58,64,90,55,88,79,70,96];

foreach($nilaiSiswa as $nilai){
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus)<br><br>";
        continue;
    }
}

echo "Nilai: $nilai (Lulus)<br><br>";

// Soal 4.6
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiSiswa);
$totalNilai = 0;
$jumlahNilaiDihitung = count($nilaiSiswa) - 4;
$counter = 0;

foreach ($nilaiSiswa as $index => $nilai) {
    if ($index < 2) {
        continue;
    }

    if ($counter >= $jumlahNilaiDihitung) {
        break;
    }

    $totalNilai += $nilai;
    $counter++;
}

$rataRata = $totalNilai / $jumlahNilaiDihitung;

echo "Nilai yang diurutkan: " . implode(", ", $nilaiSiswa) . "<br>";
echo "Total nilai yang digunakan: " . $totalNilai . "<br>";
echo "Rata-rata nilai: " . $rataRata."<br><br>";

// Soal 4.7
$hargaProduk = 120000;
$diskon = 0.20;
$batasDiskon = 100000;

if ($hargaProduk > $batasDiskon) {
    $jumlahDiskon = $hargaProduk * $diskon;
    $hargaAkhir = $hargaProduk - $jumlahDiskon;
    
    echo "Harga produk: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";
    echo "Anda mendapatkan diskon 20% karena pembelian di atas Rp " . number_format($batasDiskon, 0, ',', '.') . "<br>";
    echo "Jumlah diskon: Rp " . number_format($jumlahDiskon, 0, ',', '.') . "<br>";
    echo "Harga yang harus dibayar: Rp " . number_format($hargaAkhir, 0, ',', '.') . "<br>";
} else {
    $hargaAkhir = $hargaProduk;
    echo "Harga produk: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";
    echo "Maaf, Anda tidak mendapatkan diskon. Harga yang harus dibayar tetap Rp " . number_format($hargaAkhir, 0, ',', '.') . "<br>";
}

// Soal 4.8 

$skorPemain = 650;
$batasHadiah = 500;

if ($skorPemain > $batasHadiah) {
    $mendapatkanHadiah = "YA";
} else {
    $mendapatkanHadiah = "TIDAK";
}

echo "<br><br>Total skor pemain adalah: " . $skorPemain . "<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . $mendapatkanHadiah;
?>