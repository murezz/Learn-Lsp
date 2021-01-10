<?php

$title = 'Tambah Data Siswa';

require '../../public/app.php';

require '../layouts/header.php';

require '../layouts/navbarAdmin.php';


if (isset($_POST["submit"])) {

  if (tambahSiswa($_POST) > 0) {
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
            <div class="col-md-4 mb-3">
              <label for="nisn">Nisn</label>
              <input type="number" class="form-control" id="nisn" name="nisn" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="nis">Nis</label>
              <input type="text" class="form-control" id="nis" name="nis" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="nama">Nama Siswa</label>
              <input type="text" class="form-control" id="nama" name="nama" aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Please choose a username.
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="nominal">Nominal</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend">Rp</span>
                </div>
                <select class="custom-select form-control" id="jurusan" name="id_spp" required>
                  <option selected disabled value=""></option>
                  <option value="1">200.000</option>
                  <option value="2">300.000</option>
                  <option value="3">400.000</option>
                  <option value="4">500.000</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid zip.
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="jurusan">Kelas</label>
              <select class="custom-select form-control" id="jurusan" name="id_kelas" required>
                <option selected disabled value=""></option>
                <option value="1">12 rpl</option>
                <option value="2">11 rpl</option>
                <option value="3">10 rpl</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid state.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="no_telp">No Telp</label>
              <input type="number" class="form-control" id="notelp" name="no_telp" required>
              <div class="invalid-feedback">
                Please provide a valid city.
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-8 mb-3">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" rows="3" required>
              <div class="invalid-feedback">
                Please provide a valid zip.
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-end layout-btn" style="margin-top: -60px; margin-right:45px;">
            <button class="btn col-3" type="submit" name="submit">Tambah</button>
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
          <h4>Data Behasil di tambah!</h4>
          <hr>
          <a href="admin.php" class="alert-link btn">Ok!</a>
        </div>
      <?php endif; ?>

      <?php if (isset($gagal)) : ?>
        <div class="alert alert-gagal col-4 shadow-lg" role="alert">
          <div class="image d-flex justify-content-center" data-aos="zoom-in">
            <img src="../../assets/img/failed.svg" width="200px" alt="">
          </div>
          <h4>Data Gagal di tambahkan!</h4>
          <p>*ada data yang sudah ada</p>
          <hr>
          <a href="tambahSiswa.php" class="alert-link btn">Ok!</a>
        </div>
      <?php endif; ?>
    </div>
    <!-- Penutup -->

  </div>
</section>

<?php require '../layouts/footer.php'; ?>