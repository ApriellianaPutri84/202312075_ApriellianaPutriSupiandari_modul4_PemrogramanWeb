<?php
// Null: Variabel tanpa nilai
$alamat_pengiriman = null;

// Array: Koleksi nilai yang bisa berupa tipe data apa saja
$daftar_pelajaran = ["Pemrograman Web", "Basis Data", "Jaringan Komputer"];
$data_siswa = [
    "nama" => "Budi Santoso",
    "kelas" => "XI RPL 1",
    "umur" => 17
];

// Object: Instance dari sebuah kelas (contoh sederhana)
// Untuk membuat objek, kita perlu mendefinisikan kelas terlebih dahulu
class Produk {
    public $nama_produk;
    public $stok;

    public function __construct($nama_produk, $stok) {
        $this->nama_produk = $nama_produk;
        $this->stok = $stok;
    }
}
$produk_baru = new Produk("Mouse Wireless", 50);

// Resource: Variabel khusus yang menampung referensi ke sumber eksternal
// Contoh: Koneksi database, file yang terbuka. Sulit ditunjukkan tanpa koneksi aktual.
// $file_handle = fopen("contoh.txt", "r"); // Contoh: Membuka file

echo "<h2>Informasi Variabel Tambahan:</h2>";
var_dump($alamat_pengiriman);
echo "<br>";
var_dump($daftar_pelajaran);
echo "<br>";
var_dump($data_siswa);
echo "<br>";
var_dump($produk_baru);
echo "<br>";
// var_dump($file_handle); // Baris ini akan error jika file tidak ada atau tidak terbuka dengan benar
?>