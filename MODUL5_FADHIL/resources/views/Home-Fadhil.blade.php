@extends('layouts.main')

@section('container')
<!-- main -->
<main class="container mx-auto test">
  <div class="row mt-5 justify-content-center align-items-center">
    <div class="col-6">
      <div class="atas">
        <h2>Selamat Datang Di Show Room Fadhil</h2>
        <p>At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.</p>
        <a class="btn btn-primary" href="/list">MyCar</a>
      </div>

      <div class="row mt-5">
        <div class="col-2">
          <img src="images/logo-ead.png" alt="" width="100" height="30">
        </div>
        <div class="col-10">
          <p class="">Nur Muhammad Fadhilah - 1202202269</p>
        </div>
      </div>
    </div>
    <div class="col-6">
      <img src="images/ayla.png" alt="">
    </div>
  </div>
</main>
<!-- end of main -->
@endsection