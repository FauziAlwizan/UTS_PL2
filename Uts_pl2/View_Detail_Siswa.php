<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
      function confirmAction() {
        let confirmAction = confirm("Apakah anda yakin ingin menghapus data ini?");
        if (confirmAction) {
          alert("Data berhasil dihapus");
        } else {
          alert("Data gagal dihapus");
        }
      }
    </script>
</head>
<body>
    <center>
    <h4>Halaman Detail Siswa</h4>
        <table border = "1">
            <tr>
                <th>NISN</th>
                <th>NIS</th>
                <th>NAMA</th>
                <th>ID KELAS</th>
                <th>ALAMAT</th>
                <th>NO TELP</th>
                <th>ID SPP</th>
                <th>AKSI</th>
            </tr>
            <?php
            $nisn= $_POST['nisn'];
        
            if($nisn == ""){
                    header("location:View_Siswa.php?nisn=kosong");
                }else{
                ?>
                <tr>
                    <?php    
                    include 'Database.php';
                    $data = mysqli_query ($koneksi,"SELECT * FROM latihan_spp_siswa where nisn='$nisn'");
                    while($d=mysqli_fetch_array($data)){
                    ?>
                    <td><?php echo $nisn; ?></td>
                    <td><?php echo $d['nis']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['id_kelas']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td><?php echo $d['no_telp']; ?></td>
                    <td><?php echo $d['id_spp']; ?></td>
                    <td>
                    <a onclick="confirmAction()" href= "Delete_Siswa.php?nisn=" >Hapus</a>
                    </td>   
                </tr>
            <?php
            }
        }
        ?>
                
        </table>
        <p><a href="View_Siswa.php">Kembali</a></p>
        </center>
</body>
</html>