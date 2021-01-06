<?php

$title = 'Login';

require '../../public/app.php';

require '../layouts/header.php';


// logic backend

if (isset($_POST['login'])) {

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
              <input type="number" class="form-control col-10" id="nis" name="nis" placeholder="Masukkan NIS anda.">
            </div>
            <?php if (isset($error)) : ?>
              <p class="font-italic" style="color: red;">maaf nis anda salah</p>
            <?php endif; ?>
            <button type="submit" name="login" class="btn shadow btn-login col-3">Login</button>
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