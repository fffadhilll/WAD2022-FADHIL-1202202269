<?php
    require "../config/registrasi.php";

    if ( isset($_POST["daftar"]) ) {
        if ( registrasi($_POST) > 0 ){
            echo "<script>
                    alert('User baru berhasil ditambahkan');
                  </script>";

            header("Location: ./Login.php");
        } else {
            echo mysqli_error($conn);
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <!-- main -->
    <main>
        <div class="row ">
            <div class="col-6">
                <img src="../assets/images/ayla.png" alt="" height="100%" width="100%">
            </div>

            <div class="col-6">
                <div class="content p-4">
                    <h2 class="mb-5">Register</h2>

                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="hp" class="form-label">Nomor Handphone</label>
                            <input type="text" class="form-control" id="hp" name="hp">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="konfirmasi-password" class="form-label">Konfirmasi Kata Sandi</label>
                            <input type="password" class="form-control" id="konfirmasiPassword" name="konfirmasiPassword">
                        </div>
                        <button type="submit" class="btn btn-primary" name="daftar">Daftar</button>
                    </form>
                    <p class="mt-3">Anda sudah punya akun? <a href="../pages/Login.php">Login</a></p>
                </div>
            </div>
        </div>
    </main>
    <!-- end of main -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>