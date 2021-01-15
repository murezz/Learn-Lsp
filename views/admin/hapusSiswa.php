<?php


require '../../public/app.php';

$nisn = $_GET["nisn"];

if (hapusSiswa($nisn) > 0) {
  echo "<script>
  alert('Data Berhasil Di Hapus!');
  location.href='admin.php';
  window
  </script>";
} else {
  echo mysqli_error($conn);
}
