<?php

require '../../public/app.php';

$nis = $_GET["nis"];

if (hapusSiswa($nis) > 0) {
  echo "<script>
  alert('Data Berhasil Di Hapus!');
  location.href='admin.php';
  window
  </script>";
} else {
  echo mysqli_error($conn);
}
