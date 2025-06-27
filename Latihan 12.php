<?php
// Fungsi hitung_diskon dari contoh sebelumnya
function hitung_diskon($harga, $persen_diskon) {
    $potongan = $harga * ($persen_diskon / 100);
    return $harga - $potongan;
}

$harga_baju = 150000;
$harga_setelah_diskon = hitung_diskon($harga_baju, 10); // Diskon 10%
echo "Harga akhir: Rp " . number_format($harga_setelah_diskon, 0, ',', '.') . "<br><br>"; // Menambahkan format mata uang dan baris baru


// --- Fungsi baru: sapa($nama, $waktu) ---
/**
 * Fungsi untuk menampilkan pesan sapaan personal.
 *
 * @param string $nama  Nama orang yang akan disapa.
 * @param string $waktu Waktu sapaan (contoh: "Pagi", "Siang", "Sore", "Malam").
 * @return void
 */
function sapa($nama, $waktu) {
    echo "Selamat " . $waktu . ", " . $nama . "!";
}

// Contoh penggunaan fungsi sapa()
sapa("Budi", "Pagi"); // Akan menampilkan "Selamat Pagi, Budi!"
echo "<br>";
sapa("Ani", "Siang"); // Akan menampilkan "Selamat Siang, Ani!"
echo "<br>";
sapa("Dani", "Malam"); // Akan menampilkan "Selamat Malam, Dani!"
?>