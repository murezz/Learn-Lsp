<?php

$title = 'Login | Admin';

require '../../public/app.php';

require '../layouts/header.php';


// logic backend

if (isset($_POST['login'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];

  $result = mysqli_query($conn, "SELECT * FROM petugas WHERE username = '$username' AND password = '$password'");

  // cek username
  if (mysqli_num_rows($result) === 1) {

    // cek level
    $row = mysqli_fetch_assoc($result);
    if ($_SESSION["level"] = $row["level"] == 'admin') {
      header("Location:admin.php");
    } else if ($_SESSION["level"] = $row["level"] == 'petugas') {
      header("Location:petugas.php");
    }
  }
  $error = true;
}

?>


<section id="loginAdmin">
  <div class="container">
    <div class="card shadow">
      <div class="card-body">
        <div class="container">
          <div class="row">
            <div class="col-6 image">
              <img src="../../assets/img/bg-petugas.svg" alt="">
            </div>
            <div class="col-6 custom-login">
              <form action="" method="post">
                <h2 class="text-center">Login Petugas</h2>
                <hr>
                <div class="form-group username">
                  <label for="username">Username</label>
                  <input type="username" class="form-control" id="username" name="username">
                </div>
                <div class="form-group password">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password">
                </div>
                <?php if (isset($error)) : ?>
                  <p class="font-italic" style="color: red;">maaf username atau password salah</p>
                <?php endif ?>
                <button type="submit" name="login" class="btn shadow col-4">Login</button>
                <a href="../siswa/login.php" class="btn shadow-sm col-3">kembali</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php require '../layouts/footer.php'; ?>