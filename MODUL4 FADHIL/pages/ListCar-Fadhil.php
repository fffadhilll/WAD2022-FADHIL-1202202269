<?php
  session_start();
  if ( !isset($_SESSION["login"]) ) {
      header("Location: ./Login.php");
      exit;
  }

  require('../config/connector.php');
  $title = "MyCar";
  $cars = query("SELECT * FROM showroom_fadhil_table");
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>List Mobil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/style/style.css">
</head>

<body>
  <!-- navbar -->
  <?php
    if ( !isset($_SESSION["login"]) ) {
      include "./Navbar-noLogin.php";
    } else {
      include "./Navbar-login.php";
    }
  ?>
  <!-- end of navbar -->

  <!-- main -->
  <main class="container mx-auto test">
    <div class="row mt-5">
      <h1>My Show Room</h1>
      <p>List Show Room <strong>Nur Muhammad Fadhilah</strong> - 1202202269</p>
    </div>

    <?php if (count($cars) == 0) : ?>
      <?php header("Location: ./Add-Fadhil.php") ?>
    <?php else : ?>
      <div class="row mt-5 g-5">
        <?php foreach ($cars as $car) : ?>
          <div class="col-3">
            <div class="card" style="width: 18rem;">
              <img src="../assets/images/<?= $car['foto_mobil'] ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $car["nama_mobil"] ?></h5>
                <p class='card-text'><?= substr($car['deskripsi'], 0, 100) . ' ...' ?></p>
                <a href="./Detail-Fadhil.php?id=<?= $car['id_mobil'] ?>" class="btn btn-primary ">Detail</a>
                <a href="../config/delete.php?id=<?= $car['id_mobil'] ?>" class="btn btn-danger mx-4">Delete</a>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
      <p>Jumlah Mobil: <?= count($cars) ?></p>
    <?php endif; ?>
  </main>
  <!-- end of main -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>