<?php



require '../../public/app.php';

$id = $_GET["id_petugas"];

if (hapusPetugas($id) > 0) {
  echo "<script>
  alert('Data Berhasil Di Hapus!');
  location.href='daftarPetugas.php';
  window
  </script>";
}
