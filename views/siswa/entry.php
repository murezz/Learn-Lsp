<?php

$title = 'Entry Pembayaran';

require '../../public/app.php';

require '../layouts/header.php';


$nisn = $_GET['nisn'];

$entry = mysqli_query($conn, "SELECT * FROM pembayaran INNER JOIN petugas ON pembayaran.id_petugas = petugas.id_petugas WHERE nisn = $nisn");


?>


<section>
  <div class="container py-4">
    <div class="d-flex justify-content-center">
      <?php while ($row = mysqli_fetch_assoc($entry)) : ?>
        <div class="card w-35 shadow">
          <div class="alert alert-success" data-aos="fade-down" role="alert">
            <div class="d-flex justify-content-center">
              <img src="../../assets/img/entry.svg" data-aos="zoom-in" data-aos-duration="1500" width="100px" alt="">
            </div>
            Terima Kasih sudah membayar
          </div>
          <div class="card-body">
            <span>Petugas : <?= $row['nama_pertugas']; ?></span><br>
            <hr>
            <span>Nisn : <?= $row['nisn']; ?></span><br>
            <hr>
            <span>Tanggal : <?= $row['tgl_bayar']; ?></span><br>
            <hr>
            <span>Bulan : <?= $row['bulan_dibayar']; ?></span><br>
            <hr>
            <span>Tahun : <?= $row['tahun_dibayar']; ?></span><br>
            <hr>
            <span>Nominal : Rp. <?= $row['id_spp']; ?>00.000</span><br>
            <hr>
            <span>Jumlah di bayar : Rp. <?= $row['jumlah_bayar']; ?>.000</span>
          </div>
          <div class="p-3">
            <a href="pembayaran.php" class="btn btn-outline-primary col-12">Kembali</a>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>


<?php require '../layouts/footer.php'; ?>