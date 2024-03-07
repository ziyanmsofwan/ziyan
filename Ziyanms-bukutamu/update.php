<?php
session_start();
$user = $_SESSION['username'];
if ($user == "") {
?>
    <script>
        document.location = 'index.php';
    </script>
<?php
    exit; // tambahkan exit setelah redirect
}

include "koneksi.php";
include "boot.php";

$id = $_GET['id'];
$tampil = $koneksi->query("SELECT * FROM bukutamu_ziyan WHERE no='$id'");
$b = $tampil->fetch_array();

if (isset($_POST['update'])) {
    // Perhatikan penulisan query dan penggunaan $_POST dengan benar
    $tanggal = $_POST['tanggal'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $umur = $_POST['umur'];
    $keperluan = $_POST['keperluan'];

    
    $update = $koneksi->query("UPDATE bukutamu_ziyan SET tanggal='$tanggal', nama='$nama', jk='$jk', alamat='$alamat', umur='$umur', keperluan='$keperluan' WHERE no='$id'");

    if ($update) {
?>
        <script>
            alert('Data berhasil diupdate');
            document.location.href = 'tampil.php';
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('Gagal mengupdate data');
            document.location.href = 'edit.php?id=<?php echo $id; ?>';
        </script>
<?php
    }
}
?>

<div class="container mt-2">
    <div class="row">
        <div class="col col-">
            <form method="post" action="">
                <h3>FORM EDIT </h3>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                    <input readonly type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tanggal" value="<?php echo $b['tanggal']; ?>" required>
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
                    <label for="exampleInputPassword1" class="form-label">Keperluan</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="keperluan" value="<?php echo $b['keperluan']; ?>" required>
                </div>
                <button type="submit" class="btn btn-info" name="update">Edit</button>
            </form>
        </div>
    </div>
</div>