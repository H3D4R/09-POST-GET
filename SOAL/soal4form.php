<html>

<head>
  <title>Form Pendaftaran Mahasiswa Baru</title>
</head>

<body>
  <h2>Form Pendaftaran Mahasiswa Baru</h2>
  <h2>UNVIERSITASS X</h2>
  <form action="soal4-get.php" method="get">

    Nama Lengkap: <input type="text" name="nama"><br><br>

    Tempat Lahir: <input type="text" name="tempat"><br><br>

    Tanggal Lahir:
    <select name="tanggal">
      <?php
      for ($i = 1; $i <= 31; $i++) {
        echo "<option value='$i'>$i</option>";
      }
      ?>
    </select>
    <select name="bln">
      <?php
      for ($i = 1; $i <= 12; $i++) {
        echo "<option value='$i'>$i</option>";
      }
      ?>
    </select>
    <select name="thn">
      <?php
      for ($i = 1980; $i <= 2005; $i++) {
        echo "<option value='$i'>$i</option>";
      }
      ?>
    </select>
    <br><br>

    Alamat Rumah: <br>
    <textarea name="alamat" rows="3" cols="30"></textarea><br><br>

    Jenis Kelamin:
    <input type="radio" name="jk" value="Pria">Pria
    <input type="radio" name="jk" value="Wanita">Wanita
    <br><br>

    Asal Sekolah: <input type="text" name="sekolah"><br><br>
    Nilai UAN: <input type="text" name="uan"><br><br>

    <input type="submit" value="Kirim">
    <input type="reset" value="Reset">
  </form>
</body>

</html>