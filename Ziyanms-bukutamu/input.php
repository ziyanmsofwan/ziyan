<?php

include "koneksi.php";

$tanggal=$_POST['tanggal'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$jk=$_POST['jk'];
$umur=$_POST['umur'];
$keperluan=$_POST['keperluan'];
// $waktu=$_POST['waktu']

$input=$koneksi -> query ("insert into bukutamu_ziyan (tanggal,nama,alamat,jk,umur,keperluan) values  ('$tanggal','$nama','$alamat','$jk','$umur','$keperluan')");
?>

<script>
    document.location.href = "tampil.php";
</script>
