<?php
// Perulangan for
for ($i = 0; $i < 5; $i++) {
    echo "Perulangan ke-" . ($i + 1) . "<br>";
}

echo "<br>"; // Tambahkan baris baru untuk pemisah

// Perulangan while
$angka = 5;
while ($angka > 0) {
    echo "Hitung mundur: $angka <br>";
    $angka--;
}

echo "<br>"; // Tambahkan baris baru untuk pemisah

// --- Perulangan foreach untuk menampilkan semua elemen dari sebuah array ---

$mata_kuliah = ["Pemrograman Web", "Basis Data", "Jaringan Komputer", "Sistem Operasi"];

echo "Daftar Mata Kuliah:<br>";
foreach ($mata_kuliah as $mk) {
    echo "- " . $mk . "<br>";
}
?>