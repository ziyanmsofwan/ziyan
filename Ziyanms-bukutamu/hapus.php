<?php
include "koneksi.php";
$id=$_GET['id'];
$delete=$koneksi->query("delete from bukutamu_ziyan where no='$id'")
?>
<script>
    document.location.href='tampil.php';
</script>