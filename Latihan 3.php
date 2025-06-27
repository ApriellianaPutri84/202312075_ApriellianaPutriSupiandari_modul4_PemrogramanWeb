<?php
// Variabel untuk menyimpan nama mahasiswa dan semester
$nama_mahasiswa = "Aprielliana PUtri S";
$semester = 4;
echo "Selamat datang, " . $nama_mahasiswa . "! Anda sekarang berada di semester " . $semester . ".";

echo "<br><br>"; // Tambahkan dua baris baru untuk pemisah

// --- Variabel baru untuk panjang dan lebar ---
$panjang = 10; //  bisa mengubah nilai ini
$lebar = 5;    // bisa mengubah nilai ini

// Hitung luas
$luas = $panjang * $lebar;

// Tampilkan hasilnya
echo "Panjang: " . $panjang . " cm<br>";
echo "Lebar: " . $lebar . " cm<br>";
echo "Luas: " . $luas . " cm<sup>2</sup>"; // Menggunakan <sup> untuk pangkat 2
?>