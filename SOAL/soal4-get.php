<?php
$nama     = $_GET['nama'];
$tempat   = $_GET['tempat'];
$tanggal  = $_GET['tanggal'];
$alamat   = $_GET['alamat'];
$jk       = $_GET['jk'];
$sekolah  = $_GET['sekolah'];
$uan      = $_GET['uan'];

echo "<h3>Terima kasih $nama sudah mengisi form pendaftaran.</h3>";
echo "<table border='0' cellspacing='5'>
<tr><td>Nama Lengkap</td><td>: $nama</td></tr>
<tr><td>Tempat Lahir</td><td>: $tempat</td></tr>
<tr><td>Tanggal Lahir</td><td>: $tanggal</td></tr>
<tr><td>Alamat Rumah</td><td>: $alamat</td></tr>
<tr><td>Jenis Kelamin</td><td>: $jk</td></tr>
<tr><td>Asal Sekolah</td><td>: $sekolah</td></tr>
<tr><td>Nilai UAN</td><td>: $uan</td></tr>
</table>";
