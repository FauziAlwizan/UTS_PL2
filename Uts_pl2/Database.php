<?php

$koneksi = mysqli_connect("localhost","root","","db_uts_pl2");
 
if(!$koneksi)
{
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>