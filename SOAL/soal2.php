<?php
$jumlahUang = (int)$_POST['jumlah_uang'];
$sisa = $jumlahUang;

// Daftar pecahan yang tersedia
$pecahan = array(100000, 50000, 20000, 5000, 100, 50);
$hasil = array();

foreach ($pecahan as $nilai) {
    $jumlahLembar = (int)($sisa / $nilai);
    $hasil[$nilai] = $jumlahLembar;
    $sisa = $sisa % $nilai; // Sisa uang untuk pecahan berikutnya
}
$hasil['sisa_akhir'] = $sisa;
?>

<html>

<head>
    <title>Hasil Pecahan Uang</title>
</head>

<body>
    <h1>Rincian Pecahan Uang</h1>
    <p>Jumlah uang yang ditarik: **Rp. <?php echo number_format($jumlahUang, 0, ',', '.'); ?>**</p>
    <table border="1">
        <tr>
            <th>Pecahan (Rp.)</th>
            <th>Jumlah Lembar</th>
        </tr>
        <?php foreach ($hasil as $nilai => $jumlah) : ?>
            <?php if ($nilai !== 'sisa_akhir') : ?>
                <tr>
                    <td><?php echo number_format($nilai, 0, ',', '.'); ?></td>
                    <td><?php echo $jumlah; ?> lembar</td>
                </tr>
            <?php endif; ?>
        <?php endforeach; ?>
        <?php if ($hasil['sisa_akhir'] > 0) : ?>
            <tr>
                <td colspan="2" style="color:red;">**Sisa Uang (tidak dapat dipecah): Rp. <?php echo number_format($hasil['sisa_akhir'], 0, ',', '.'); ?>**</td>
            </tr>
        <?php endif; ?>
    </table>
</body>

</html>