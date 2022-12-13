<?php
session_start();
require "../config/connector.php";

// if ( isset($_COOKIE["login"]) ) {
//     if ( $_COOKIE["login"] == 'true') {
//         $_COOKIE["login"] = true;
//     }
// }

if (isset($_SESSION["login"])) {
    header("Location: ./Home-Fadhil.php");
    exit;
}


if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user_fadhil WHERE email='$email'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        if ($password === $row["password"]) {
            $_SESSION["login"] = true;
            $_SESSION["nama"] = $row["nama"];
            $_SESSION["id"] = $row["id"];
            // if ( isset($_POST["remember"]) ) {
            //     setcookie("login", 'true', time() + 60);
            // }

            header("Location: ./Home-Fadhil.php");
            exit;
        }
    }

    $error = true;
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
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
                    <h2 class="mb-5">Login</h2>

                    <?php if (isset($error)) : ?>
                        <p>email/password salah</p>
                    <?php endif ?>

                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label" for="remember">Remember Me</label>
                        </div>

                        <button type="submit" class="btn btn-primary" name="login">Login</button>
                    </form>
                    <p class="mt-3">Anda sudah punya akun? <a href="../pages/Register.php">Daftar</a></p>
                </div>
            </div>
        </div>
    </main>
    <!-- end of main -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>