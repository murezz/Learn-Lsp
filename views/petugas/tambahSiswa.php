<?php

$title = 'Tambah Data Siswa';

require '../../public/app.php';

require '../layouts/header.php';

require '../layouts/navbarAdmin.php';


if (isset($_POST["submit"])) {

  if (tambah($_POST) > 0) {
    echo "
      <script>
      alert('Data Berhasil di tambahkan');
      document.location.href = 'dashboard.php';
      </script>
    ";
  } else {
    echo mysqli_error($conn);
    // echo "
    //   <script>
    //   alert('Data Gagal di tambahkan');
    //   document.location.href = 'login.php';
    //   </script>
    // ";
  }
}

?>

<section id="tambahSiswa">
  <div class="container py-5 custom-tambahSiswa">
    <div class="card shadow in-card">
      <div class="card-body in-body">
        <form class="needs-validation" action="" method="post" novalidate>
          <div class="form-row custom-form">
            <div class="col-md-4 mb-3">
              <label for="nisn">Nisn</label>
              <input type="number" class="form-control" id="nisn" name="nisn" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="nis">Nis</label>
              <input type="text" class="form-control" id="nis" name="nis" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="nama">Nama Siswa</label>
              <input type="text" class="form-control" id="nama" name="nama" aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Please choose a username.
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="kelas">Kelas</label>
              <input type="text" class="form-control" id="kelas" name="nama_kelas" required>
              <div class="invalid-feedback">
                Please provide a valid city.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="jurusan">Kompetensi Keahlian</label>
              <select class="custom-select form-control" id="jurusan" name="kompetensi_keahlian" required>
                <option selected disabled value=""></option>
                <option>Rekayasa Perangkat Lunak</option>
                <option>Akuntansi</option>
                <option>Perkantoran</option>
                <option>Pemasaran</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid state.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" required>
              <div class="invalid-feedback">
                Please provide a valid zip.
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="no_telp">No Telp</label>
              <input type="number" class="form-control" id="notelp" name="no_telp" required>
              <div class="invalid-feedback">
                Please provide a valid city.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="tahun">Tahun</label>
              <input type="number" class="form-control" id="tahun" name="tahun" required>
              <div class="invalid-feedback">
                Please select a valid state.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="nominal">Nominal</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend">Rp</span>
                </div>
                <input type="text" class="form-control" id="nominal" name="nominal" required>
                <div class="invalid-feedback">
                  Please provide a valid zip.
                </div>
              </div>
            </div>
          </div>
          <button class="btn col-2 shadow" type="submit" name="submit">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php require '../layouts/footer.php'; ?>