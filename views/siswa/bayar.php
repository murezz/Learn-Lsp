<?php

$title = 'Pembayaran';

require '../../public/app.php';

require '../layouts/header.php';

$nis = $_GET['nis'];

$bayar = mysqli_query($conn, "SELECT * FROM siswa INNER JOIN spp ON siswa.id_spp = spp.id_spp WHERE nis = $nis");

?>


<section>
  <div class="container py-4 d-flex justify-content-center">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-6">
            <img src="../../assets/img/bayar.svg" class="mt-5" width="350px" alt="">
          </div>
          <div class="col-6">
            <form action="">
              <?php while ($row = mysqli_fetch_assoc($bayar)) : ?>
                <div class="form-group">
                  <input type="text" class="form-control">
                </div>
                <div class="form-group">
                  <input type="number" class="form-control" value="<?= $row['nisn']; ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" value="<?= $row['nominal']; ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control">
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