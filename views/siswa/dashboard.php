<?php

$title = 'Home | Siswa';

require '../../public/app.php';

require '../layouts/header.php';


// logic backend
$result = mysqli_query($conn, "SELECT * FROM (( siswa INNER JOIN kelas 
                        ON siswa.id_kelas = kelas.id_kelas ) INNER JOIN spp
                        ON siswa.id_spp = spp.id_spp)");

?>

<section id="dashboard-siswa">
  <div class="container py-5 custom-dashboard">

    <script>
      Swal.fire('Ini adalah sweetalert Basic');
    </script>
    <form class="form-inline my-2 my-lg-0 custom-form">
      <h2>Daftar Siswa</h2>
      <input class="form-control mr-sm-1 ml-auto col-4 shadow-sm" type="search" placeholder="Masukkan Nama Anda" aria-label="Search">
      <button class="btn my-2 my-sm-0 shadow-sm" type="submit">Cari</button>
    </form>
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
              <a href="" class="btn">Bayar</a>
            </td>
          </tr>
          <?php $i++; ?>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</section>


<?php require '../layouts/footer.php'; ?>