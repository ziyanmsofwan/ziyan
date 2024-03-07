<?php
include "koneksi.php";
include "boot.php";
$id = $_GET['id'];
$tampil = $koneksi->query("select * from bukutamu_ziyan where no='$id'");

$b = $tampil->fetch_array();

?>
<div class="container mt-2">
  <div class="row">
    <div class="col col-">

      <form action="" method="post">
        <h3>FORM EDIT</h3>
        <form action="input.php" method="post">
          <h3>ISI DATA</h3>
          <form>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Tanggal</label>
              <input readonly type="date" class="form-control" id="exampleInputPassword1" name="tanggal" value="<?php echo $b['tanggal']; ?>" required>
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Nama</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="nama" value="<?php echo $b['nama']; ?>" required>
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
              <select class="form-select" aria-label="Default select example" name="jk" required>
                <option value="Laki-Laki" <?php echo ($b['jk'] == 'Laki-Laki') ? 'selected' : ''; ?>>Laki-Laki</option>
                <option value="Perempuan" <?php echo ($b['jk'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Alamat</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="alamat" value="<?php echo $b['alamat']; ?>" required>
            </div>


            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Umur</label>
              <input type="number" class="form-control" id="exampleInputPassword1" name="umur" value="<?php echo $b['umur']; ?>" required>
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">keperluan</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="keperluan" value="<?php echo $b['keperluan']; ?>" required>
            </div>
            <button type="submit" class="btn btn-info" name="update">Edit</button>
          </form>
    </div>
  </div>

  <?php
  if (isset($_POST['update'])) {
    $update = $koneksi->query("update bukutamu_ziyan set tanggal='$_POST[tanggal]',nama='$_POST[nama]',jk='$_POST[jk]',alamat='$_POST[alamat]',umur='$_POST[umur]',keperluan='$_POST[keperluan]'where no='$id'");


  ?>
    <script>
      document.location.href = 'tampil.php';
    </script>
  <?php
  }
  ?>