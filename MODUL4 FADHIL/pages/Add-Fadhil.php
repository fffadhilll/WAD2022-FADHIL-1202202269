<?php
    session_start();

    if ( !isset($_SESSION["login"]) ) {
      header("Location: ./Login.php");
    } 

    require "../config/insert.php";

    if (isset($_POST["selesai"])) {

        if (tambah($_POST) > 0) {
            echo "
                    <script>
                        alert('Data berhasil ditambahkan');
                        document.location.href = './ListCar-Fadhil.php';
                    </script>
                ";
        } else {
            echo "
                    <script>
                        alert('Data tidak berhasil ditambahkan');
                        document.location.href = './ListCar-Fadhil.php';
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
    <title>Tambah Mobil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style/style.css">
</head>

<body>

    <!-- main -->
    <main class="container mx-auto test">
        <div class="row mt-5">
            <h1>Tambah Mobil</h1>
            <p>Tambah Mobil baru anda ke list show room</p>
        </div>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama_mobil" class="form-label">Nama Mobil</label>
                <input type="text" name="nama_mobil" class="form-control" id="nama_mobil">
            </div>
            <div class="mb-3">
                <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
                <input type="text" name="nama_pemilik" class="form-control" placeholder="Nur Muhammad Fadhilah - 1202202269" id="nama_pemilik">
            </div>
            <div class="mb-3">
                <label for="merk" class="form-label">Merk</label>
                <input type="text" name="merk" class="form-control" placeholder="BMW" id="merk">
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal Beli</label>
                <input type="date" name="tanggal" class="form-control" placeholder="11/12/2022" id="tanggal">
            </div>
            <div class="mb-3">
                <label for="deskrpisi" class="form-label">Deskripsi</label>
                <textarea name="deskrpisi" class="form-control p-3" id="deskrpisi" rows="3" placeholder="The first all-electric Gran Coupé, the BMW i4 delivers outstanding dynamics with a high level of comfort and the ideal qualities to make it your daily driver. The five-door model comes equipped with fifth-generation BMW eDrive technology for sporty performance figures – reaching up to 340 hp. With a long range of up to 591 kilometres* and five spacious full-sized seats, it is the perfect companion for any journey.
"></textarea>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input class="form-control" type="file" id="foto" name="foto">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status Pembayaran</label><br>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="lunas" value="Lunas">
                    <label class="form-check-label" for="lunas">Lunas</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="belum_lunas" value="Belum Lunas">
                    <label class="form-check-label" for="belum_lunas">Belum Lunas</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary" name="selesai">Selesai</button>
        </form>
    </main>
    <!-- end of main -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>