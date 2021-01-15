<?php


$title = 'Tambah Data Petugas';

require '../../public/app.php';

require '../layouts/header.php';

require '../layouts/navbarAdmin.php';


// logic backend

if (isset($_POST["submit"])) {

  if (tambahPetugas($_POST) > 0) {
    $succes = true;
  } else {
    $error = true;
  }
}

?>


<section id="petugas">
  <div class="container mt-5 custom-petugas">
    <!-- Jika data berhasil atau gagal di tambah -->
    <?php if (isset($succes)) : ?>
      <div class="alert text-center" style="background-color: #42fff3; color:#fff;" role="alert">
        <h3>Data Berhasil Ditambahkan!</h3>
        <a href="daftarPetugas.php" class="alert-link btn" style="border-color: #002652; color: #002652;">Lihat Daftar Petugas</a>
      </div>
    <?php endif; ?>

    <?php if (isset($gagal)) : ?>
      <div class="alert alert-danger text-center" style="color:#fff;" role="alert">
        <h3>Data Berhasil Ditambahkan!</h3>
        <a href="daftarPetugas.php" class="alert-link btn" style="border-color: #42adff; color: #42adff;">Lihat Daftar Petugas</a>
      </div>
    <?php endif; ?>
    <!-- Penutup -->
    <div class="card shadow ">
      <div class="card-body ">
        <div class="row">
          <div class="col-md-6">
            <img src="../../assets/img/bg-tambahPetugas.svg" width="500px" alt="">
          </div>
          <div class="col-md-6">
            <form action="" method="post" class="mt-3">
              <div class="form-group py-1">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
              </div>
              <div class="form-group py-1">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              </div>
              <div class="form-group py-1">
                <input type="text" class="form-control" id="nama" name="nama_pertugas" placeholder="Nama Petugas">
              </div>
              <div class="form-group py-1">
                <input type="text" class="form-control" name="level" value="petugas">
              </div>
              <div class="button">
                <button class="btn btn-primary" type="submit" name="submit">Tambah Data</button>
                <a href="daftarPetugas.php" class="btn btn-outline-primary">Kembali</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php require '../layouts/footer.php'; ?>