<?php

$conn = mysqli_connect("localhost", "root", "", "spp");


function tambah($data)
{

  global $conn;
  // ambil data dari setiap element
  $nisn = $data["nisn"];
  $nis = $data["nis"];
  $nama = $data["nama"];
  $kelas = $data["nama_kelas"];
  $jurusan = $data["kompetensi_keahlian"];
  $alamat = $data["alamat"];
  $no_telp = $data["no_telp"];
  $tahun = $data["tahun"];
  $nominal = $data["nominal"];

  $query = "INSERT INTO siswa VALUES ('$nisn', '$nis', '$nama', '$alamat','$no_telp')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
