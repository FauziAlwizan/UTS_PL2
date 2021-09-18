<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Document</title>

  </head>
  <body>
  <?php
    include 'Database.php';
    $nisn = $_POST['nisn'];
    $data = mysqli_query ($koneksi, "DELETE FROM latihan_spp_siswa WHERE nisn ='$nisn'");
    header("location:View_Detail_Siswa.php?pesan=hapus");
    ?>
  </body>
</html>