<?php


require '../../public/app.php';

$id = $_GET["id_pembayaran"];

if (hapusInfo($id) > 0) {
    echo "<script>
  alert('Data Berhasil Di Hapus!');
  location.href='info.php';
  window
  </script>";
} else {
    echo mysqli_error($conn);
}
