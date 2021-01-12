<?php

$title = 'Daftar Petugas';

require '../layouts/header.php';

require '../layouts/navbarAdmin.php';

require '../../public/app.php';


// Logic Backend

$result = mysqli_query($conn, "SELECT * FROM petugas");


?>


<section id="dashboard-admin">
  <div class="container py-5 custom-dashboard">
    <form class="form-inline my-2 my-lg-0 custom-form">
      <h2>Daftar Petugas</h2>
      <input class="form-control mr-sm-1 ml-auto col-4 shadow-sm" type="search" placeholder="Masukkan Nama Petugas" aria-label="Search">
      <button class="btn my-2 my-sm-0 shadow-sm" type="submit">Cari</button>
    </form>
    <hr>
    <table class="table table-bordered shadow-sm">
      <thead>
        <tr class="text-center">
          <th scope="col">No.</th>
          <th scope="col">Username</th>
          <th scope="col">Nama</th>
          <th scope="col">Role</th>
          <th>
            <a href="tambahPetugas.php" class="btn">Tambah Petugas</a>
          </th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
          <tr class="text-center">
            <th scope="row"><?= $i; ?></th>
            <td><?= $row['username']; ?></td>
            <td><?= $row['nama_pertugas']; ?></td>
            <td><?= $row['level']; ?></td>
            <td>
              <a href="editPetugas.php?id_petugas=<?= $row["id_petugas"]; ?>" class="btn edit">Edit</a> |
              <a href="hapusPetugas.php?id_petugas=<?= $row["id_petugas"]; ?>" class="btn hapus">Hapus</a>
            </td>
          </tr>
          <?php $i++; ?>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</section>


<?php require '../layouts/footer.php'; ?>