<?php
$nama = $_POST['nama'];
$tempatLahir = $_POST['tempat_lahir'];
$tanggalLahir = $_POST['tgl'] . "-" . $_POST['bln'] . "-" . $_POST['thn'];
$alamat = $_POST['alamat'];
$jkel = $_POST['jkel'];
$asalSekolah = $_POST['asal_sekolah'];
$nilaiUAN = $_POST['nilai_uan'];
?>

<html>

<head>
    <title>Hasil Pendaftaran</title>
</head>

<body>
    <h1>Hasil Pendaftaran Mahasiswa Baru</h1>

    <p>Terimakasih **<?php echo $nama; ?>** sudah mengisi form pendaftaran.</p>

    <table>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><?php echo $tempatLahir; ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><?php echo $tanggalLahir; ?></td>
        </tr>
        <tr>
            <td>Alamat Rumah</td>
            <td>:</td>
            <td><?php echo $alamat; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $jkel; ?></td>
        </tr>
        <tr>
            <td>Asal Sekolah</td>
            <td>:</td>
            <td><?php echo $asalSekolah; ?></td>
        </tr>
        <tr>
            <td>Nilai UAN</td>
            <td>:</td>
            <td><?php echo $nilaiUAN; ?></td>
        </tr>
    </table>
</body>

</html>