<?php

$title = 'Tambah Data Siswa';

require '../../public/app.php';

require '../layouts/header.php';

require '../layouts/navbarAdmin.php';


$nis = $_GET['nis'];

$siswa = mysqli_query($conn, "SELECT * FROM (( siswa INNER JOIN kelas 
ON siswa.id_kelas = kelas.id_kelas ) INNER JOIN spp
ON siswa.id_spp = spp.id_spp) WHERE nis = $nis ");


if (isset($_POST["submit"])) {

  if (editSiswa($_POST) > 0) {
    $succes = true;
  } else {
    $gagal = true;
  }
}

?>



<section id="tambahSiswa">
  <div class="container py-5 custom-tambahSiswa">
    <div class="card shadow in-card py-3">
      <div class="card-body in-body">
        <form class="needs-validation" action="" method="post" novalidate>
          <div class="form-row custom-form">
            <?php while ($row = mysqli_fetch_assoc($siswa)) : ?>
              <div class="col-md-4 mb-3">
                <label for="nisn">Nisn</label>
                <input type="number" class="form-control" id="nisn" name="nisn" required value="<?= $row['nisn']; ?>">
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="nis">Nis</label>
                <input type="text" class="form-control" id="nis" name="nis" required value="<?= $row['nis']; ?>">
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="nama">Nama Siswa</label>
                <input type="text" class="form-control" id="nama" name="nama" aria-describedby="inputGroupPrepend" required value="<?= $row['nama']; ?>">
                <div class="invalid-feedback">
                  Please choose a username.
                </div>
              </div>
          </div>
          <div class="form-row">
            <div class="col-md-8 mb-3">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" rows="3" required value="<?= $row['alamat']; ?>">
              <div class="invalid-feedback">
                Please provide a valid zip.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="no_telp">No Telp</label>
              <input type="number" class="form-control" id="notelp" name="no_telp" required value="<?= $row['no_telp']; ?>">
              <div class="invalid-feedback">
                Please provide a valid city.
              </div>
            </div>
          </div>
        <?php endwhile; ?>
        <div class="layout-btn">
          <button class="btn col-2" type="submit" name="submit">Ubah</button>
        </div>
        </form>
      </div>
    </div>

    <!-- Jika data berhasil atau gagal di tambah -->
    <div class="layout-alert d-flex justify-content-center">
      <?php if (isset($succes)) : ?>
        <div class="alert alert-berhasil col-4 shadow-lg" role="alert">
          <div class="image d-flex justify-content-center" data-aos="zoom-in" data-aos-duration="1000">
            <img src="../../assets/img/succes.svg" width="200px" alt="">
          </div>
          <h4>Data Behasil di ubah!</h4>
          <hr>
          <a href="admin.php" class="alert-link btn">Ok!</a>
        </div>
      <?php endif; ?>

      <?php if (isset($gagal)) : ?>
        <div class="alert alert-gagal col-4 shadow-lg" role="alert">
          <div class="image d-flex justify-content-center" data-aos="zoom-in">
            <img src="../../assets/img/failed.svg" width="200px" alt="">
          </div>
          <h4>Data Gagal di ubah!</h4>
          <p>*Maaf NIS tidak bisa di ubah</p>
          <hr>
          <a href="admin.php" class="alert-link btn">Ok!</a>
        </div>
      <?php endif; ?>
    </div>
    <!-- Penutup -->

  </div>
</section>

<?php require '../layouts/footer.php'; ?>