<?php

$title = 'Home | Siswa';

require '../../public/app.php';

require '../layouts/header.php';


// logic backend
$result = mysqli_query($conn, "SELECT * FROM (( siswa INNER JOIN kelas 
                        ON siswa.id_kelas = kelas.id_kelas ) INNER JOIN spp
                        ON siswa.id_spp = spp.id_spp)");

?>

<div class="container py-5">
  <h2>Daftar Nama Siswa</h2>
  <hr>
  <table class="table table-bordered shadow-sm">
    <thead>
      <tr class="text-center">
        <th scope="col">No.</th>
        <th scope="col">Nis</th>
        <th scope="col">Nama</th>
        <th scope="col">Kelas</th>
        <th scope="col">Nominal SPP</th>
        <th scope="col">Bayar SPP</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr class="text-center">
          <th scope="row"><?= $i; ?></th>
          <td><?= $row['nis']; ?></td>
          <td><?= $row['nama']; ?></td>
          <td><?= $row['nama_kelas']; ?></td>
          <td><?= $row['nominal']; ?></td>
          <td>
            <a href="" class="btn btn-primary">Bayar</a>
          </td>
        </tr>
        <?php $i++; ?>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>


<?php require '../layouts/footer.php'; ?>