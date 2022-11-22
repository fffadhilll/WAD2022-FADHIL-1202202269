<?php
require "../config/edit.php";

$id = $_GET["id"];
$car = query("SELECT * FROM wad_modul3 WHERE id_mobil=$id")[0];

if (isset($_POST["simpan"])) {
    if (ubah($_POST) > 0) {
        echo "
                <script>
                    alert('Data berhasil diubah');
                    document.location.href = './ListCar-Fadhil.php';
                </script>
            ";
    } else {
        echo "
                <script>
                    alert('Data tidak berhasil diubah');
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
    <title>Edit Mobil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style/style.css">
</head>

<body>
    <!-- navbar -->
    <?php include "Navbar.php" ?>
    <!-- end of navbar -->

    <!-- main -->
    <main class="container mx-auto test">
        <div class="row mt-5">
            <h1><?= $car["nama_mobil"] ?></h1>
            <p>Detail mobil <?= $car["nama_mobil"] ?></p>
        </div>

        <div class="row">
            <div class="col-6">
                <img src="../assets/images/<?= $car["foto_mobil"] ?>" alt="">
            </div>

            <div class="col-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_mobil" value="<?= $id ?>">
                    <div class="mb-3">
                        <label for="nama_mobil" class="form-label">Nama Mobil</label>
                        <input type="text" name="nama_mobil" class="form-control" id="nama_mobil" value="<?= $car['nama_mobil'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
                        <input type="text" name="nama_pemilik" class="form-control" value="<?= $car['pemilik_mobil'] ?>" id="nama_pemilik">
                    </div>
                    <div class="mb-3">
                        <label for="merk" class="form-label">Merk</label>
                        <input type="text" name="merk" class="form-control" value="<?= $car['merk_mobil'] ?>" id="merk">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal Beli</label>
                        <input type="date" name="tanggal" class="form-control" value="<?= $car['tanggal_beli'] ?>" id="tanggal">
                    </div>
                    <div class="mb-3">
                        <label for="deskrpisi" class="form-label">Deskripsi</label>
                        <textarea name="deskrpisi" class="form-control p-3" id="deskrpisi" rows="3"><?php echo htmlspecialchars($car['deskripsi']); ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <input class="form-control" type="file" id="foto" name="foto">
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status Pembayaran</label><br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="lunas" value="Lunas" <?= $car['status_pembayaran'] == 'Lunas' ? 'checked' : ' ' ?>>
                            <label class="form-check-label" for="lunas">Lunas</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="belum_lunas" value="Belum Lunas" <?= $car['status_pembayaran'] == 'Belum Lunas' ? 'checked' : ' ' ?>>
                            <label class="form-check-label" for="belum_lunas">Belum Lunas</label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                </form>
            </div>
        </div>
    </main>
    <!-- end of main -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>