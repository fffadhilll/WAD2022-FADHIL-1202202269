@extends('layouts.main')

@section('container')
<!-- main -->
<main class="container mx-auto test">
  <div class="row mt-5">
    <h1 class="text-center">Profile</h1>
  </div>

  <form action="" method="post">
      @csrf
      @method('PUT')
      <input type="hidden" name="id" value="{{ $user->id }}">
      <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{ $user->email }}" disabled>
      </div>
      <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" value="{{ $user->name }}">
      </div>
      <div class="mb-3">
          <label for="hp" class="form-label">Nomor Handphone</label>
          <input type="text" class="form-control" id="hp" name="hp" value="{{ $user->no_hp }}">
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
          <img src="/images/logo-ead.png" alt="" width="100" height="30">
        </div>
        <div class="col-10">
          <p class="">Nur Muhammad Fadhilah - 1202202269</p>
        </div>
  </div>
</main>
<!-- end of main -->
@endsection