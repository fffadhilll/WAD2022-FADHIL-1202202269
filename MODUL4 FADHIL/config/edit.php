<?php
require('../config/connector.php ');

function ubah($data)
{
    global $conn;
    $id_mobil = htmlspecialchars($data["id_mobil"]);
    $nama_mobil = htmlspecialchars($data["nama_mobil"]);
    $nama_pemilik = htmlspecialchars($data["nama_pemilik"]);
    $merk = htmlspecialchars($data["merk"]);
    $tanggal = htmlspecialchars($data["tanggal"]);
    $deskrpisi = htmlspecialchars($data["deskrpisi"]);
    $status = htmlspecialchars($data["status"]);

    $foto = upload();

    $query = "UPDATE showroom_fadhil_table SET 
                    nama_mobil='$nama_mobil', 
                    pemilik_mobil='$nama_pemilik', 
                    merk_mobil='$merk', 
                    tanggal_beli='$tanggal', 
                    deskripsi='$deskrpisi',
                    foto_mobil='$foto', 
                    status_pembayaran='$status'
                WHERE id_mobil='$id_mobil'
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{
    $nama_file = $_FILES['foto']['name'];
    $tmp_name = $_FILES['foto']['tmp_name'];

    // // $nama_file_baru = uniqid();

    move_uploaded_file("$tmp_name", "../assets/images/" . $nama_file);

    return $nama_file;
}

function ubahUser($data)
{
    global $conn;
    $id = htmlspecialchars($data["id"]);
    $nama = htmlspecialchars($data["nama"]);
    $hp = htmlspecialchars($data["hp"]);
    $password = htmlspecialchars($data["password"]);

    $query = "UPDATE user_fadhil SET 
                    nama='$nama', 
                    no_hp='$hp', 
                    password='$password' 
                WHERE id='$id'
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
