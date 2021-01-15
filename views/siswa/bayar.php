<?php


$title = 'Pembayaran';

require '../../public/app.php';

require '../layouts/header.php';

$nis = $_GET['nis'];

$bayar = mysqli_query($conn, "SELECT * FROM siswa INNER JOIN spp ON siswa.id_spp = spp.id_spp WHERE nis = $nis");

if (isset($_POST['submit'])) {

  if (Pembayaran($_POST) > 0) {
    $sukses = true;
  } else {
    $error = true;
  }
}

?>


<section>
  <div class="container py-5 mt-5 d-flex justify-content-center">
    <div class="row">
      <div class="col-6">
        <img src="../../assets/img/bayar.svg" class="mt-5 py-5" width="350px" alt="">
      </div>
      <div class="col-6">
        <div class="card shadow">
          <div class="card-body">

            <?php if (isset($sukses)) : ?>
              <div class="alert alert-success text-center" data-aos="zoom-in" role="alert">
                Transaksi sukses, <br><a href="pembayaran.php" class="alert-link">Lihat daftar pembayaran?</a>
              </div>
            <?php endif; ?>

            <?php if (isset($error)) : ?>
              <div class="alert alert-warning text-center" data-aos="zoom-in" role="alert">
                Anda sudah membayar spp
              </div>
            <?php endif; ?>

            <form action="" method="post">
              <?php while ($row = mysqli_fetch_assoc($bayar)) : ?>
                <div class="form-group">
                  <select type="text" class="form-control" name="id_petugas">
                    <option selected disabled>Pilih Petugas</option>
                    <option value="5">Firman Aulia</option>
                    <option value="6">Rizqi Akbar Rabbani</option>
                    <option value="8">Hanny utami</option>
                  </select>
                </div>
                <div class="form-group mt-3">
                  <input type="number" class="form-control" name="nisn" value="<?= $row['nisn']; ?>">
                </div>
                <div class="form-group">
                  <input type="number" class="form-control" name="tgl_bayar" placeholder="Tanggal">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="bulan_dibayar" placeholder="Bulan">
                </div>
                <div class="form-group">
                  <input type="number" class="form-control" name="tahun_dibayar" placeholder="Tahun">
                </div>
                <div class="form-group">
                  <input type="hidden" class="form-control" name="id_spp" value="<?= $row['id_spp']; ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" value="<?= $row['nominal']; ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="jumlah_bayar" placeholder="Jumlah Bayar">
                </div>
              <?php endwhile; ?>
              <button class="btn btn-primary" type="submit" name="submit">Bayar</button>
              <a href="dashboard.php" class="btn btn-outline-primary">Kembali</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php require '../layouts/footer.php'; ?>