<?php


$title = 'Login';

require '../../public/app.php';

require '../layouts/header.php';


// logic backend


if (isset($_POST['submit'])) {


  $nis = $_POST['nis'];

  $result = mysqli_query($conn, "SELECT * FROM siswa WHERE nis = '$nis'");

  // cek nis
  if (mysqli_num_rows($result) === 1) {
    header("Location: dashboard.php");
  }
  $error = true;
}

?>


<section id="login">
  <div class="container custom-login">
    <div class="row">
      <div class="col-md-6 form-layout">
        <div class="form-custom">
          <h1>e-SPP JPone</h1>
          <p>Website untuk memudahkan siswa melakukan pembayaran spp.</p>
          <form action="" method="post">
            <div class="form-group">
              <?php if (isset($error)) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  Maaf nis anda salah
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              <?php endif; ?>
              <input type="number" class="form-control col-10 shadow" id="nis" name="nis" placeholder="Masukkan NIS anda.">
            </div>
            <button type="submit" name="submit" class="btn shadow btn-login col-3">Login</button>
            <a href="../petugas/login.php" class="btn shadow-sm btn-loginAdmin col-6">Masuk sebagai petugas</a>
          </form>
        </div>
      </div>
      <div class="col-md-6 image">
        <img src="../../assets/img/img-login.svg" alt="">
      </div>
    </div>
  </div>
</section>


<?php require '../layouts/footer.php'; ?>