<?php 
  $title = "Home";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style/style.css">
  </head>
  <body>
    <!-- navbar -->
    <?php include "Navbar.php" ?>
    <!-- end of navbar -->

    <!-- main -->
    <main class="container mx-auto test">
      <div class="row mt-5 justify-content-center align-items-center">
        <div class="col-6">
          <div class="atas">
            <h2>Selamat Datang Di Show Room Fadhil</h2>
            <p>At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.</p>
            <a class="btn btn-primary" href="./ListCar-Fadhil.php">MyCar</a>
          </div>

          <div class="row mt-5">
            <div class="col-2">
              <img src="../assets/images/logo-ead.png" alt="" width="100" height="30">
            </div>
            <div class="col-10">
              <p class="">Nur Muhammad Fadhilah - 1202202269</p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <img src="../assets/images/ayla.png" alt="">
        </div>
      </div>
    </main>
    <!-- end of main -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>