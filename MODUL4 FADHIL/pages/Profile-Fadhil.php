<?php
  session_start();
  if ( !isset($_SESSION["login"]) ) {
      header("Location: ./Login.php");
      exit;
  }

  require('../config/edit.php');
  $id = $_SESSION["id"];
  $user = query("SELECT * FROM user_fadhil WHERE id='$id'")[0];

  if (isset($_POST["update"])) {
    setcookie("primary", "", time() - 3600);
    setcookie("danger", "", time() - 3600);
    setcookie("success", "", time() - 3600);

    if ($_POST["warna"] == 'Biru') {
      setcookie("primary", "primary");
    } elseif ($_POST["warna"] == 'Merah') {
      setcookie("danger", "", time() - 3600);
      setcookie("danger", "danger");
    } elseif ($_POST["warna"] == 'Hijau') {
      setcookie("success", "", time() - 3600);
      setcookie("success", "success");
    }

      if (ubahUser($_POST) > 0) {
          echo "
                  <script>
                      alert('Profil berhasil diubah');
                      document.location.href = './Home-Fadhil.php';
                  </script>
              ";
      } else {
          echo "
                  <script>
                      alert('Profil tidak berhasil diubah');
                      document.location.href = './Home-Fadhil.php';
                  </script>
              ";
      }
    };
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
      <h1 class="text-center">Profile</h1>
    </div>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $user["id"] ?>">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?= $user["email"] ?>" disabled>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $user["nama"] ?>">
        </div>
        <div class="mb-3">
            <label for="hp" class="form-label">Nomor Handphone</label>
            <input type="text" class="form-control" id="hp" name="hp" value="<?= $user["no_hp"] ?>">
        </div>
        <hr class="">
        <div class="mb-3">
            <label for="password" class="form-label">Kata Sandi</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi">
        </div>
        <div class="mb-3">
            <label for="konfirmasiPassword" class="form-label">Konfirmasi Kata Sandi</label>
            <input type="password" class="form-control" id="konfirmasiPassword" name="konfirmasiPassword" placeholder="Konfirmasi Kata Sandi">
        </div>
        
        <div class="mb-3">
          <select class="form-select" aria-label="Default select example" name="warna">
            <option value="Biru">Biru</option>
            <option value="Merah">Merah</option>
            <option value="Hijau">Hijau</option>
          </select>
        </div>

        <button type="submit" class="btn btn-primary" name="update">Update</button>
    </form>

    <div class="row mt-5">
          <div class="col-2">
            <img src="../assets/images/logo-ead.png" alt="" width="100" height="30">
          </div>
          <div class="col-10">
            <p class="">Nur Muhammad Fadhilah - 1202202269</p>
          </div>
    </div>
  </main>
  <!-- end of main -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>