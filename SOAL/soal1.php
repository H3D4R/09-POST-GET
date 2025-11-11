<?php
$saldoAwal = $_POST['saldo_awal'];
$bungaPersen = $_POST['bunga'];
$lamaBulan = $_POST['lama_bulan'];

$bungaDesimal = $bungaPersen / 100;

// Perhitungan Bunga Sederhana: Saldo Awal * Bunga * Bulan
$totalBunga = $saldoAwal * $bungaDesimal * $lamaBulan;

$saldoAkhir = $saldoAwal + $totalBunga;
?>

<html>

<head>
    <title>Hasil Perhitungan Saldo</title>
</head>

<body>
    <h1>Hasil Perhitungan Saldo Tabungan</h1>
    <table border="1">
        <tr>
            <td>Saldo Awal</td>
            <td>:</td>
            <td>Rp. <?php echo number_format($saldoAwal, 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <td>Bunga Per Bulan</td>
            <td>:</td>
            <td><?php echo $bungaPersen; ?>%</td>
        </tr>
        <tr>
            <td>Lama Menabung</td>
            <td>:</td>
            <td><?php echo $lamaBulan; ?> bulan</td>
        </tr>
        <tr>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td>Total Bunga (Rp.)</td>
            <td>:</td>
            <td>Rp. <?php echo number_format($totalBunga, 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <td>**Saldo Akhir**</td>
            <td>:</td>
            <td>**Rp. <?php echo number_format($saldoAkhir, 0, ',', '.'); ?>**</td>
        </tr>
    </table>
</body>

</html>