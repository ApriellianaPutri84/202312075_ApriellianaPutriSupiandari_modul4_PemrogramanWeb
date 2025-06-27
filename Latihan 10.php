<?php
$ukuran_baju = "XL"; // Coba ubah nilai ini ke "S", "L", "XL", atau yang lain

switch ($ukuran_baju) {
    case "S":
        echo "Anda memilih ukuran Small (S).";
        break;
    case "M":
        echo "Anda memilih ukuran Medium (M).";
        break;
    case "L":
        echo "Anda memilih ukuran Large (L).";
        break;
    case "XL":
        echo "Anda memilih ukuran Extra Large (XL).";
        break;
    default:
        echo "Ukuran baju tidak tersedia. Silakan pilih S, M, L, atau XL.";
}
?>