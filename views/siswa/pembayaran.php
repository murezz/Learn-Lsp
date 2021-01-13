<?php

$title = 'Data pembayaran Siswa';

require '../../public/app.php';

require '../layouts/header.php';

require '../layouts/navbarSiswa.php';

// logic backend
$pembayaran = mysqli_query($conn, "SELECT * FROM  pembayaran INNER JOIN petugas ON pembayaran.id_petugas = petugas.id_petugas");

?>

<section id="dashboard-siswa">
  <div class="container py-5 custom-dashboard">
    <form class="form-inline my-2 my-lg-0 custom-form">
      <h2>Daftar Pembayaran</h2>
      <input class="form-control mr-sm-1 ml-auto col-4 shadow-sm" type="search" placeholder="Masukkan Nama Anda" aria-label="Search">
      <button class="btn my-2 my-sm-0 shadow-sm" type="submit">Cari</button>
    </form>
    <hr>
    <table class="table table-bordered shadow-sm">
      <thead>
        <tr class="text-center">
          <th scope="col">No.</th>
          <th scope="col">Petugas</th>
          <th scope="col">nisn</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Bulan</th>
          <th scope="col">Tahun</th>
          <th scope="col">Nominal SPP</th>
          <th scope="col">Jumlah Yang dibayar</th>
          <th scope="col">
            <a href="dashboard.php" class="btn btn-outline-warning">Kembali</a>
          </th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($pembayaran)) : ?>
          <tr class="text-center">
            <th scope="row"><?= $i; ?>.</th>
            <td><?= $row['nama_pertugas']; ?></td>
            <td><?= $row['nisn']; ?></td>
            <td><?= $row['tgl_bayar']; ?></td>
            <td><?= $row['bulan_dibayar']; ?></td>
            <td><?= $row['tahun_dibayar']; ?></td>
            <td>Rp. <?= $row['id_spp']; ?>00.000</td>
            <td>Rp. <?= $row['jumlah_bayar']; ?>.000</td>
            <td>
              <a class="btn" href="entry.php?nisn=<?= $row['nisn']; ?>">Detail</a>
            </td>
          </tr>
          <?php $i++; ?>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</section>


<?php require '../layouts/footer.php'; ?>