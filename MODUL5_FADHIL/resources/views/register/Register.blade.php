@extends('layouts.main')

<?php
    // require "../config/registrasi.php";

    // if ( isset($_POST["daftar"]) ) {
    //     if ( registrasi($_POST) > 0 ){
    //         echo "<script>
    //                 alert('User baru berhasil ditambahkan');
    //               </script>";

    //         header("Location: ./Login.php");
    //     } else {
    //         echo mysqli_error($conn);
    //     }
    // }
?>

@section('container')
<!-- main -->
<main>
    <div class="row ">
        <div class="col-6">
            <img src="images/ayla.png" alt="" height="100%" width="100%">
        </div>

        <div class="col-6">
            <div class="content p-4">
                <h2 class="mb-5">Register</h2>

                <form action="/register" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required value="{{ old('email') }}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" required value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="hp" class="form-label">Nomor Handphone</label>
                        <input type="text" class="form-control" id="hp" name="hp" value="{{ old('hp') }}">
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
@endsection