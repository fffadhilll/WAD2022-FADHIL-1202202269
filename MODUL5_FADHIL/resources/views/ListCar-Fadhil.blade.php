@extends('layouts.main')

<?php
  // session_start();
  // if ( !isset($_SESSION["login"]) ) {
  //     header("Location: ./Login.php");
  //     exit;
  // }

  // require('../config/connector.php');
  // $title = "MyCar";
  // $cars = query("SELECT * FROM showroom_fadhil_table");
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
<main class="container mx-auto test">
  <div class="row mt-5">
    <h1>My Show Room</h1>
    <p>List Show Room <strong>Nur Muhammad Fadhilah</strong> - 1202202269</p>
  </div>

  <div class="row mt-5 g-5">
    @if (count($showrooms) == 0)
      <p>Tidak ada mobil</p>
    @else 
      @foreach ($showrooms as $showroom)
        <div class="col-3">
          <div class="card" style="width: 18rem;">
            <img src="images/<?= $showroom->image ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $showroom->name ?></h5>
              <p class='card-text'><?= substr($showroom->description, 0, 100) . ' ...' ?></p>
              <a href="/detail/{{ $showroom->id }}" class="btn btn-primary ">Detail</a>
              <a href="/delete/{{ $showroom->id }}" class="btn btn-danger mx-4">Delete</a>
            </div>
          </div>
        </div>
      @endforeach
    @endif
    <p>Jumlah Mobil: <?= count($showrooms) ?></p>
  </div>

</main>
<!-- end of main -->
    
@endsection