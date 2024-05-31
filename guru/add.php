<div class="row">
    <div class="row-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Tambah Guru</div>
                <div class="col-4">
                    <a href="?m=guru&s=view" class="btn btn-large btn-primary float-end">Kembali</a>
                </div>
            </div>

            <div class="card-body">
                <form action="?m=guru&s=save" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="number" name="nip" class="form-control" placeholder="Nomor Induk Pegawai Negeri Sipil" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="nama" class="form-control" placeholder="Nama" required  >
                    </div>
                    <div class="mb-3">
                        <label for="">Jenis Kelamin: &nbsp;</label>
                        <input type="radio" name="jk" value="L" checked>Laki-laki &nbsp;
                        <input type="radio" name="jk" value="P">Perempuan
                    </div>
                    <div class="mb-3">
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir (Kabupaten/Kota)" required  >
                    </div>
                    <div class="mb-3">
                        <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" required  >
                    </div>
                    <div class="mb-3">
                        <input type="number" name="telepon" class="form-control" placeholder="Nomor Telepon" required  >
                    </div>
                    <div class="mb-3">
                        <select name="mapel_id" class="form-control" required>
                            <option value="">Pilih Mapel</option>
                            <?php
                            include_once("config.php");
                            $sql = "SELECT * FROM mapel";
                            $result = mysqli_query($con, $sql);
                            while ($r = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $r ['id'] . "'>" . $r['mapel'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Masukan Foto</label>
                        <input type="file" name="foto" class="form-control" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <input type="reset" class="btn btn-secondary">&nbsp;
                        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>