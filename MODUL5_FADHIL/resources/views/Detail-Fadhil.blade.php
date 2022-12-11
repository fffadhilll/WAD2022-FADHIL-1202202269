@extends('layouts.main')

<?php
  // session_start();
  // if ( !isset($_SESSION["login"]) ) {
  //     header("Location: ./Login.php");
  //     exit;
  // }

  // require('../config/connector.php');
  // $title = "MyCar";
  // $id = $_GET["id"];

  // $car = query("SELECT * FROM showroom_fadhil_table WHERE id_mobil='$id'");
?>

  <!-- navbar -->
  <?php
    // if ( !isset($_SESSION["login"]) ) {
    //   include "./Navbar-noLogin.php";
    // } else {
    //   include "./Navbar-login.php";
    // }
  ?>
  <!-- end of navbar -->

@section('container')
<!-- main -->
<main class="container mx-auto test ">
  <div class="row mt-5">
    <h1><?= $car[0]["nama_mobil"] ?></h1>
    <p>Detail mobil <?= $car[0]["nama_mobil"] ?></p>
  </div>

  <div class="row">
    <div class="col-6">
      <img src="../assets/images/<?= $car[0]['foto_mobil'] ?>" alt="">
    </div>

    <div class="col-6">
      <form action=" " method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="nama_mobil" class="form-label">Nama Mobil</label>
          <input type="text" name="nama_mobil" class="form-control " id="nama_mobil" placeholder="<?= $car[0]['nama_mobil'] ?>" disabled>
        </div>
        <div class="mb-3">
          <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
          <input type="text" name="nama_pemilik" class="form-control " placeholder="<?= $car[0]['pemilik_mobil'] ?>" id="nama_pemilik" disabled>
        </div>
        <div class="mb-3">
          <label for="merk" class="form-label">Merk</label>
          <input type="text" name="merk" class="form-control" placeholder="<?= $car[0]['merk_mobil'] ?>" id="merk" disabled>
        </div>
        <div class="mb-3">
          <label for="tanggal" class="form-label">Tanggal Beli</label>
          <input type="date" name="tanggal" class="form-control" value="<?= $car[0]['tanggal_beli'] ?>" id="tanggal" disabled>
        </div>
        <div class="mb-3">
          <label for="deskrpisi" class="form-label">Deskripsi</label>
          <textarea name="deskrpisi" class="form-control p-3" id="deskrpisi" rows="3" placeholder="<?= $car[0]['deskripsi'] ?>
  " disabled></textarea>
        </div>
        <div class="mb-3">
          <label for="foto" class="form-label">Foto</label>
          <input class="form-control" type="file" id="foto" name="foto">
        </div disabled>

        <div class="mb-3">
          <label for="status" class="form-label">Status Pembayaran</label><br>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status" id="lunas" value="Lunas" <?= $car[0]['status_pembayaran'] == 'Lunas' ? 'checked' : ' ' ?> disabled>
            <label class="form-check-label" for="lunas">Lunas</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status" id="belum_lunas" value="Belum Lunas" <?= $car[0]['status_pembayaran'] == 'Belum Lunas' ? 'checked' : ' ' ?> disabled>
            <label class="form-check-label" for="belum_lunas">Belum Lunas</label>
          </div>
        </div>

        <a class="btn btn-primary" href="./Edit-Fadhil.php?id=<?= $car[0]['id_mobil'] ?>">Edit</a>
      </form>
    </div>
  </div>
</main>
<!-- end of main -->
@endsection