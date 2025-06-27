<?php
// Associative Array (dari contoh sebelumnya)
$data_dosen = [
    "nama" => "Ir. ABADI NUGROHO, S.Kom., M.Kom.",
    "nidn" => "1104129002",
    "matkul" => "Pemrograman Web"
];

echo "Dosen Pengampu: " . $data_dosen["nama"] . "<br>";

echo "<br>"; // Tambahkan baris baru untuk pemisah

// --- Indexed Array Daftar Teman Sekelas ---
$teman_sekelas = [
    "Ani Susanti",
    "Budi Santoso",
    "Citra Dewi",
    "Dedi Kurniawan",
    "Eka Putri"
];

echo "<h3>Daftar Teman Sekelas:</h3>";
echo "<ul>"; // Mulai daftar tak berurutan HTML
foreach ($teman_sekelas as $nama_teman) {
    echo "<li>" . $nama_teman . "</li>"; // Tampilkan setiap nama sebagai item daftar
}
echo "</ul>"; // Akhiri daftar tak berurutan HTML
?>