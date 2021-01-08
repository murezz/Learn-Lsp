<?php

$conn = mysqli_connect("localhost", "root", "", "spp");


function tambah($data)
{

  global $conn;
  // ambil data dari setiap element
  $nisn = $data["nisn"];
  $nis = $data["nis"];
  $nama = $data["nama"];
  // $kelas = $data["nama_kelas"];
  // $jurusan = $data["kompetensi_keahlian"];
  $alamat = $data["alamat"];
  $no_telp = $data["no_telp"];
  $tahun = $data["tahun"];
  $nominal = $data["nominal"];

  $query = "INSERT INTO siswa (id, nisn, nis, nama, almat, no_telp) VALUES ('', '$nisn', '$nis', '$nama', '$alamat', '$no_telp') ";
  $query .= "INSERT INTO spp (id_spp, tahun, nominal) VALUES ('', '$tahun', '$nominal') ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function hapus($nis)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM siswa WHERE nis = $nis");

  return mysqli_affected_rows($conn);
}
