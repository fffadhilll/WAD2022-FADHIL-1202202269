<?php
require('../config/connector.php ');

function tambah($data)
{
    global $conn;
    $nama_mobil = htmlspecialchars($data["nama_mobil"]);
    $nama_pemilik = htmlspecialchars($data["nama_pemilik"]);
    $merk = htmlspecialchars($data["merk"]);
    $tanggal = htmlspecialchars($data["tanggal"]);
    $deskrpisi = htmlspecialchars($data["deskrpisi"]);
    $status = htmlspecialchars($data["status"]);
    // $belum_lunas = htmlspecialchars($data["belum_lunas"]);
    $foto = upload();

    $query = "INSERT INTO showroom_fadhil_table VALUES ('', '$nama_mobil', '$nama_pemilik', '$merk', '$tanggal', '$deskrpisi', '$foto', '$status')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{
    $nama_file = $_FILES['foto']['name'];
    $tmp_name = $_FILES['foto']['tmp_name'];

    move_uploaded_file("$tmp_name", "../assets/images/" . $nama_file);

    return $nama_file;
}
