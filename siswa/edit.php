<div class="row">
    <div class="row-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Data Siswa</div>
                <div class="col-4">
                    <a href="?m=siswa&s=view" class="btn btn-large btn-primary float-end">Kembali</a>
                </div>
            </div>
<?php
include_once('config.php');
$id = $_GET['id'];
$sql = "SELECT * FROM siswa WHERE id='$id'";
$result = mysqli_query($con, $sql);
$r=mysqli_fetch_assoc($result);
?>
            <div class="card-body">
                <form action="?m=siswa&s=update" method="post">
                    <div class="mb-3">
                        <input type="text" name="siswa" value="<?= $r['siswa']; ?>" class="form-control" placeholder="Nama siswa" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="kapasitas" value="<?= $r['kapasitas']; ?>" class="form-control" placeholder="Kapasitas" required>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="terisi" value="<?= $r['terisi']; ?>" class="form-control" placeholder="Terisi" required>
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?= $r['id']; ?>">
                        <input type="reset" class="btn btn-secondary">&nbsp;
                        <input type="submit" value="Update" name="update" class="btn btn-primary">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>