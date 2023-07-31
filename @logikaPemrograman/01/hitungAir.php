<!-- Soal 1 dijawab dengan bahasa pemrograman PHP -->
<!-- @mikodev -->

<?php

function hitungAir($pengeluaran, $biaya)
{
    return $pengeluaran * $biaya;
}

?>

<h1>HITUNG PENGELUARAN AIR</h1>


<form action="" method="POST">
    <input type="text" name="TotPengeluaran" placeholder="0 m3">
    <button type="submit">Hitung</button>
</form>


<?php
$pengeluaran = $_POST['TotPengeluaran'];

if ($pengeluaran <= 10) {
    $total = hitungAir($pengeluaran, 1000);
} elseif ($pengeluaran <= 20) {
    $total = hitungAir(10, 1000) + hitungAir($pengeluaran, 1500) - 15000;
} elseif ($pengeluaran <= 35) {
    $total = hitungAir(10, 1000) + hitungAir(20, 1500) - 15000 + hitungAir($pengeluaran, 2000) - 40000;
} else {
    $total = hitungAir(10, 1000) + hitungAir(20, 1500) - 15000 + hitungAir(35, 2000) - 40000 + hitungAir($pengeluaran, 3000) - 105000;
}

?>


<hr>
<h1>Hasil :</h1>
<h3>Rp. <?= number_format($total); ?></h3>
<hr>