@extends('layouts.main')

@section('container')
<!-- main -->
<main class="container mx-auto test">
    <div class="row mt-5">
        <h1>Tambah Mobil</h1>
        <p>Tambah Mobil baru anda ke list show room</p>
    </div>
    
    <form action="/addCar" method="post" enctype="multipart/form-data">
    @csrf
    
    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        <div class="mb-3">
            <label for="nama_mobil" class="form-label">Nama Mobil</label>
            <input type="text" name="nama_mobil" class="form-control" id="nama_mobil">
        </div>
        <div class="mb-3">
            <label for="owner" class="form-label">Nama Pemilik</label>
            <input type="text" name="owner" class="form-control" placeholder="Nur Muhammad Fadhilah - 1202202269" id="owner" value="{{ auth()->user()->name }}">
        </div>
        <div class="mb-3">
            <label for="brand" class="form-label">Merk</label>
            <input type="text" name="brand" class="form-control" placeholder="BMW" id="brand">
        </div>
        <div class="mb-3">
            <label for="purchase_date" class="form-label">Tanggal Beli</label>
            <input type="date" name="purchase_date" class="form-control" placeholder="11/12/2022" id="purchase_date">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control p-3" id="description" rows="3" placeholder="The first all-electric Gran Coupé, the BMW i4 delivers outstanding dynamics with a high level of comfort and the ideal qualities to make it your daily driver. The five-door model comes equipped with fifth-generation BMW eDrive technology for sporty performance figures – reaching up to 340 hp. With a long range of up to 591 kilometres* and five spacious full-sized seats, it is the perfect companion for any journey.
"></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Foto</label>
            <input class="form-control" type="file" id="image" name="image">
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status Pembayaran</label><br>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="lunas" value="Lunas">
                <label class="form-check-label" for="lunas">Lunas</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="belum_lunas" value="Belum-Lunas">
                <label class="form-check-label" for="belum_lunas">Belum Lunas</label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary" name="selesai">Selesai</button>
    </form>
</main>
<!-- end of main -->
@endsection