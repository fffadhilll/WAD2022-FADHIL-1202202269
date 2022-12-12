@extends('layouts.main')

@section('container')
<!-- main -->
<main class="container mx-auto test ">
  <div class="row mt-5">
    <h1>{{ $showroom->name }}</h1>
    <p>Detail mobil {{ $showroom->name }}p>
  </div>

  <div class="row">
    <div class="col-6">
      <img src="{{ asset('storage/'.$showroom->image)}}" alt="">
    </div>

    <div class="col-6">
      <form action=" " method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="nama_mobil" class="form-label">Nama Mobil</label>
          <input type="text" name="nama_mobil" class="form-control " id="nama_mobil" placeholder="{{ $showroom->name }}" disabled>
        </div>
        <div class="mb-3">
          <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
          <input type="text" name="nama_pemilik" class="form-control " placeholder="{{ $showroom->owner }}" id="nama_pemilik" disabled>
        </div>
        <div class="mb-3">
          <label for="brand" class="form-label">Merk</label>
          <input type="text" name="brand" class="form-control" placeholder="{{ $showroom->brand }}" id="brand" disabled>
        </div>
        <div class="mb-3">
          <label for="purchase_date" class="form-label">Tanggal Beli</label>
          <input type="date" name="purchase_date" class="form-control" value="{{ $showroom->purchase_date }}" id="purchase_date" disabled>
        </div>
        <div class="mb-3">
          <label for="deskrpisi" class="form-label">Deskripsi</label>
          <textarea name="deskrpisi" class="form-control p-3" id="deskrpisi" rows="3" placeholder="{{ $showroom->description }}" disabled></textarea>
        </div>
        <div class="mb-3">
          <label for="foto" class="form-label">Foto</label>
          <input class="form-control" type="file" id="foto" name="foto">
        </div disabled>

        <div class="mb-3">
          <label for="status" class="form-label">Status Pembayaran</label><br>

          <div class="form-check form-check-inline">                
            <input class="form-check-input" type="radio" name="status" id="lunas" value="Lunas" {{ $showroom->status === 'Lunas' ? 'checked' : '' }} disabled>
            <label class="form-check-label" for="lunas">Lunas</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status" id="belum_lunas" value="Belum Lunas" {{ $showroom->status === 'Belum-Lunas' ? 'checked' : '' }} disabled>
            <label class="form-check-label" for="belum_lunas">Belum Lunas</label>
          </div>
        </div>

        <a class="btn btn-primary" href="{{ '/edit/'.$showroom->id }}">Edit</a>
      </form>
    </div>
  </div>
</main>
<!-- end of main -->
@endsection