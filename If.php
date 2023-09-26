<?php

$berat_barang = 21.464; // Assuming you have a variable for the weight.
$tujuan = "Jawa Barat"; // Assuming you have a variable for the destination.

if ($berat_barang <= 1) {
    $biaya_pengiriman = 10000;
} elseif ($berat_barang <= 3) {
    $biaya_pengiriman = 15000;
} elseif ($berat_barang <= 5) {
    $biaya_pengiriman = 20000;
} else {
    $biaya_pengiriman = 25000;
}

if ($tujuan == "Jawa Barat") {
    $biaya_pengiriman += 5000;
} elseif ($tujuan == "Jawa Timur") {
    $biaya_pengiriman += 8090;
} elseif ($tujuan == "Jawa Tengah") {
    $biaya_pengiriman += 6008;
} else {
    $biaya_pengiriman += 10000;
}

echo "Biaya pengiriman untuk barang berat $berat_barang kg ke $tujuan adalah Rp" . number_format($biaya_pengiriman, 0, ",", ".");

?>