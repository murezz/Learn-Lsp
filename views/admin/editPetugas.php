<?php



$title = 'Tambah Data Petugas';

require '../../public/app.php';

require '../layouts/header.php';

require '../layouts/navbarAdmin.php';


// logic backend


$id = $_GET['id_petugas'];

$petugas = mysqli_query($conn, "SELECT * FROM petugas WHERE id_petugas = $id");


if (isset($_POST["submit"])) {

  if (editPetugas($_POST) > 0) {
    $succes = true;
  } else {
    $error = true;
  }
}

?>


<section id="tambahSiswa">
  <div class="container mt-5 custom-tambahSiswa">
    <div class="card shadow in-card">
      <div class="card-body in-body">
        <div class="row">
          <div class="col-md-6">
            <img src="../../assets/img/bg-tambahPetugas.svg" width="500px" alt="">
          </div>
          <div class="col-md-6">
            <form action="" method="post" class="mt-3">
              <?php while ($row = mysqli_fetch_assoc($petugas)) : ?>
                <input type="hidden" class="form-control" id="id_petugas" name="id_petugas" value="<?= $row['id_petugas']; ?>">
                <div class="form-group py-1">
                  <input type="text" class="form-control" id="username" name="username" value="<?= $row['username']; ?>">
                </div>
                <div class="form-group py-1">
                  <input type="password" class="form-control" id="password" name="password" value="<?= $row['password']; ?>">
                </div>
                <div class="form-group py-1">
                  <input type="text" class="form-control" id="nama" name="nama_pertugas" value="<?= $row['nama_pertugas']; ?>">
                </div>
                <div class="form-group py-1">
                  <input type="text" class="form-control" name="level" value="<?= $row['level']; ?>">
                </div>
                <div class="button">
                  <button class="btn btn-primary" type="submit" name="submit" id="submit">Edit Data</button>
                  <a href="daftarPetugas.php" class="btn btn-outline-primary">Kembali</a>
                </div>
              <?php endwhile; ?>
            </form>
          </div>
        </div>
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
          <a href="daftarPetugas.php" class="alert-link btn">Ok!</a>
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
          <a href="editPetugas.php" class="alert-link btn">Ok!</a>
        </div>
      <?php endif; ?>
    </div>
    <!-- Penutup -->

  </div>
</section>


<?php require '../layouts/footer.php'; ?>