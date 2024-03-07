<?php include "boot.php";

?>

<body class="bg-white-subtle"> 

<form action="" method="get">

<div class="row g-3 align-items-center mt-2">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label"></label>
  </div>
  <div class="col-auto">
    <input type="date" name="awal" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
  </div>
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label"></label>
  </div>
  <div class="col-auto">
    <input type="date" name="akhir" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
  </div>
  <div class="col-auto">
  <button type="submit" name="cari" value="<?php ['id']; ?>" class="btn btn-dark"><i class="bi bi-search-heart"></i></button>
  </div>
  <div class="col d-grid gap-2 md-flex justify-content-md-end me-2">
  <button class="btn btn-dark" onclick="printDiv('print')" type="submit"><i class="bi bi-printer-fill"></i></button>
    </div>
    </form>
</div>
</div>  
<fieldset id="print">
<table class="table class text-center bg-info-emphasis mt-3">
  <thead class="table-secondary">
    <tr>
       <th scope="col">No</th>
       <th scope="col">Tanggal</th>
       <th scope="col">Nama</th>
       <th scope="col">Jenis kelamin</th>
       <th scope="col">Alamat</th>
       <th scope="col">Umur</th>
       <th scope="col">keperluan</th>
       <th scope="col">waktu</th>
    
    </tr>
</thead>
    <?php include "koneksi.php";
    @$cari=$_GET['awal'];
    if($cari==""){


      $tampil=$koneksi->query("select * from bukutamu_ziyan");
    while ($a=$tampil->fetch_array()){
        @$no++;
        ?>
   <tbody class="table">
     <tr>
     <td><?php echo $no; ?></td>
        <td><?php echo $a['tanggal'] ?></td>
        <td><?php echo $a['nama'] ?></td>
        <td><?php echo $a['jk'] ?></td>
        <td><?php echo $a['alamat'] ?></td>
        <td><?php echo $a['umur'] ?></td>
        <td><?php echo $a['keperluan'] ?></td>
        <td><?php echo $a['waktu'] ?></td>
      <?php
    }
}else{
 

  $bukutamu_ziyan=$_GET['cari'];
 
    $tampil=$koneksi->query("select * from bukutamu_ziyan where tanggal between'$_GET[awal]' and '$_GET[akhir]'");
    while ($a=$tampil ->fetch_array()){
       @$no++;
       ?>
  <tbody class="table">
    <tr>   
        <td><?php echo $no; ?></td>
        <td><?php echo $a['tanggal'] ?></td>
        <td><?php echo $a['nama'] ?></td>
        <td><?php echo $a['jk'] ?></td>
        <td><?php echo $a['alamat'] ?></td>
        <td><?php echo $a['umur'] ?></td>
        <td><?php echo $a['keperluan'] ?></td>
        <td><?php echo $a['waktu'] ?></td>
    <?php
    }
}
    ?>
    </tr>
    </tbody>
    </table>
    </fieldset>
    <script type="text/javascript">
    function printDiv(el) {
        var a= document.body.innerHTML;
        var b= document.getElementById(el).innerHTML;

        document.body.innerHTML=b;
        window.print();
        document.body.innerHTML=a;
    }

</script>