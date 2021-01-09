<?php

$conn = mysqli_connect("localhost", "root", "", "spp");


function tambah($data)
{

  global $conn;
  // ambil data dari setiap element
  $nisn = $data["nisn"];
  $nis = $data["nis"];
  $nama = $data["nama"];
  $kelas = $data["id_kelas"];
  // $jurusan = $data["kompetensi_keahlian"];
  $alamat = $data["alamat"];
  $no_telp = $data["no_telp"];
  // $tahun = $data["tahun"];
  $spp = $data["id_spp"];

  $query = "INSERT INTO siswa VALUES ('$nisn', '$nis', '$nama', '$kelas', '$alamat', '$no_telp', '$spp') ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function hapus($nis)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM siswa WHERE nis = $nis");

  return mysqli_affected_rows($conn);
}
