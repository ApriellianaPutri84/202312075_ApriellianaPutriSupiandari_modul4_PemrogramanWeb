<?php
$umur = 20; // Ubah nilai agar lebih dari atau sama dengan 17
$sudah_punya_sim = true; // Ubah menjadi true

if ($umur >= 17 && $sudah_punya_sim == true) {
    echo "Anda boleh mengemudi.";
} else {
    echo "Anda tidak boleh mengemudi.";
}
?>