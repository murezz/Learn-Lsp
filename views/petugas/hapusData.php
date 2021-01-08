<?php

require '../../public/app.php';

$nis = $_GET["nis"];

if (hapus($nis) > 0) {
  echo "<script type='text/javascript'>
  alert('data berhasil di hapus')
  </script>";
} else {
  echo 'gagal';
}
