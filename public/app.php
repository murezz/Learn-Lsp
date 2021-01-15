<?php

$conn = mysqli_connect("localhost", "root", "", "spp");


function tambahSiswa($data)
{

  global $conn;
  // ambil data dari setiap element
  $nisn = htmlspecialchars($data["nisn"]);
  $nis = htmlspecialchars($data["nis"]);
  $nama = htmlspecialchars($data["nama"]);
  $kelas = htmlspecialchars($data["id_kelas"]);
  $alamat = htmlspecialchars($data["alamat"]);
  $no_telp = htmlspecialchars($data["no_telp"]);
  $spp = htmlspecialchars($data["id_spp"]);

  $query = "INSERT INTO siswa VALUES ('$nisn', '$nis', '$nama', '$kelas', '$alamat', '$no_telp', '$spp') ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function hapusSiswa($nisn)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM siswa WHERE nisn = $nisn");

  return mysqli_affected_rows($conn);
}


function editSiswa($data)
{

  global $conn;
  // ambil data dari setiap element
  $nisn = htmlspecialchars($data["nisn"]);
  $nis = htmlspecialchars($data["nis"]);
  $nama = htmlspecialchars($data["nama"]);
  $alamat = htmlspecialchars($data["alamat"]);
  $no_telp = htmlspecialchars($data["no_telp"]);

  $query = "UPDATE siswa SET 
              nisn = '$nisn',
              nis = '$nis',
              nama = '$nama',
              alamat = '$alamat',
              no_telp = '$no_telp'
              WHERE nis = '$nis' ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}


function Pembayaran($data)
{

  global $conn;

  $id_petugas = htmlspecialchars($data["id_petugas"]);
  $nisn = htmlspecialchars($data["nisn"]);
  $tgl = htmlspecialchars($data["tgl_bayar"]);
  $bulan = htmlspecialchars($data["bulan_dibayar"]);
  $tahun = htmlspecialchars($data["tahun_dibayar"]);
  $id_spp = htmlspecialchars($data["id_spp"]);
  $jumlah = htmlspecialchars($data["jumlah_bayar"]);

  mysqli_query($conn, "INSERT INTO pembayaran values ('', '$id_petugas', '$nisn', '$tgl', '$bulan', '$tahun', '$id_spp', '$jumlah') ");

  return mysqli_affected_rows($conn);
}


function cari($keyword)
{


  $query = "SELECT * FROM siswa WHERE nama LIKE '%$keyword%'";

  return mysqli_fetch_assoc($query);
}

// CRUD Petugas
function tambahPetugas($data)
{

  global $conn;

  $username = htmlspecialchars($data["username"]);
  $password = htmlspecialchars($data["password"]);
  $nama = htmlspecialchars($data["nama_pertugas"]);
  $level = htmlspecialchars($data["level"]);


  mysqli_query($conn, "INSERT INTO petugas VALUES ('', '$username', '$password', '$nama', '$level')");

  return mysqli_affected_rows($conn);
}

function editPetugas($data)
{

  global $conn;

  $id = $data["id_petugas"];
  $username = htmlspecialchars($data["username"]);
  $password = htmlspecialchars($data["password"]);
  $nama = htmlspecialchars($data["nama_pertugas"]);
  $level = htmlspecialchars($data["level"]);


  $query = "UPDATE petugas SET
            username = '$username',
            password = '$password',
            nama_pertugas = '$nama',
            level = '$level'
            WHERE id_petugas = '$id'
            ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function hapusPetugas($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM petugas WHERE id_petugas = $id");

  return mysqli_affected_rows($conn);
}

function hapusInfo($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM pembayaran WHERE id_pembayaran = $id");

  return mysqli_affected_rows($conn);
}
