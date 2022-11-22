<?php
require('../config/connector.php');
$title = "MyCar";
$cars = query("SELECT * FROM wad_modul3");
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
  <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="container-fluid container">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active <?php if ($title == "Home") echo "active" ?>" aria-current="page" href="./Home-Fadhil.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($title == "MyCar") echo "active" ?>" href="./ListCar-Fadhil.php">MyCar</a>
          </li>
        </ul>
        <a class="btn btn-light" href="./Add-Fadhil.php">Add Car</a>
      </div>
    </div>
  </nav>
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