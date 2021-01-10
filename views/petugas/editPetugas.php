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
    echo 'sukses';
  } else {
    echo mysqli_error($conn);
  }
}

?>


<section>
  <div class="container mt-5">
    <div class="card shadow">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <img src="../../assets/img/bg-tambahPetugas.svg" width="500px" alt="">
          </div>
          <div class="col-md-6">
            <form action="" method="post" class="mt-3">
              <?php while ($row = mysqli_fetch_assoc($petugas)) : ?>
                <div class="form-group py-1">
                  <input type="text" class="form-control" id="username" name="username" value="<?= $row['username']; ?>">
                </div>
                <div class="form-group py-1">
                  <input type="password" class="form-control" id="password" name="password" value="<?= $row['password']; ?>">
                </div>
                <div class="form-group py-1">
                  <input type="text" class="form-control" id="nama" name="nama_pertugas" value="<?= $row['nama_petugas']; ?>">
                </div>
                <div class="form-group py-1">
                  <input type="text" class="form-control" name="level" value="<?= $row['level']; ?>">
                </div>
                <div class="button">
                  <button class="btn btn-primary" type="submit" name="submit">Tambah Data</button>
                  <a href="daftarPetugas.php" class="btn btn-outline-primary">Kembali</a>
                </div>
              <?php endwhile; ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php require '../layouts/footer.php'; ?>