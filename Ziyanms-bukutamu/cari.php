<?php
include "koneksi.php"
?>

<table class="table">
  <thead class="table bg-info">
    <tr>
        <th>no</th>
        <th>tanggal</th>
        <th>nama</th>
        <th>jk</th>
        <th>alamat</th>
        <th>umur</th>
        <th>keperluan</th>
        <th>edit/hapus</th>

    </tr>
  </thead>
  <tbody>
<?php 
include "koneksi.php";
include "boot.php";
$cari=$_POST['cari'];
$tampil=$koneksi->query("select * from bukutamu_ziyan where nama like '%$cari%'");
$cek=$tampil->num_rows;
if($cek<1){
   ?>
    <div class="alert-secondary" role="alert">
       <div class="text-center text-dark">
  <h5><b>DATA YANG DI MASUKAN TIDAK ADA ! </b></h5>
</div>
</div>
    <?php
    }else{
    }
while($t=$tampil->fetch_array()){
			@$no++;
      ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $t['tanggal'] ?></td>
            <td><?php echo $t['nama'] ?></td>
            <td><?php echo $t['jk'] ?></td>
            <td><?php echo $t['alamat'] ?></td>
            <td><?php echo $t['umur'] ?></td>
            <td><?php echo $t['keperluan'] ?></td>

            <td><a href="hapus.php?id=<?php echo $t['no'] ?>"><button class="btn bg-danger text-light"><i class="bi bi-trash"></i></button></a>
            <a href="update.php?id=<?php echo $t['no'] ?>"><button class="btn bg-info text-light"><i class="bi bi-pencil-fill"></i></td>
        </tr>
        <?php
    }

    ?>

  </tbody>
</table>