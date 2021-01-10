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

function hapusSiswa($nis)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM siswa WHERE nis = $nis");

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

  $username = htmlspecialchars($data["username"]);
  $password = htmlspecialchars($data["password"]);
  $nama = htmlspecialchars($data["nama_pertugas"]);
  $level = htmlspecialchars($data["level"]);


  $query = "UPDATE petugas SET
            username = '$username',
            password = '$password',
            nama_petugas = '$nama',
            level = '$level'
            ";

  return mysqli_affected_rows($conn);
}

function hapusPetugas($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM petugas WHERE id_petugas = $id");

  return mysqli_affected_rows($conn);
}
