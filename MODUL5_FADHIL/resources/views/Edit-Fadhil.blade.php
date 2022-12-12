@extends('layouts.main')

@section('container')
<!-- main -->
<main class="container mx-auto test">
    <div class="row mt-5">
        <h1>{{ $showroom->name }}</h1>
        <p>Detail mobil {{ $showroom->name }}</p>
    </div>

    <div class="row">
        <div class="col-6">
            <img src="{{ asset('storage/'.$showroom->image)}}" alt="">
        </div>

        <div class="col-6">
            <form action="/update/{{ $showroom->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id_mobil" value="{{ $showroom->id }}">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Mobil</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ $showroom->name }}">
                </div>
                <div class="mb-3">
                    <label for="owner" class="form-label">Nama Pemilik</label>
                    <input type="text" name="owner" class="form-control" value="{{ $showroom->owner }}" id="owner">
                </div>
                <div class="mb-3">
                    <label for="brand" class="form-label">Merk</label>
                    <input type="text" name="brand" class="form-control" value="{{ $showroom->brand }}" id="merk">
                </div>
                <div class="mb-3">
                    <label for="purchase_date" class="form-label">Tanggal Beli</label>
                    <input type="date" name="purchase_date" class="form-control" value="{{ $showroom->purchase_date }}" id="tanggal">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <textarea name="description" class="form-control p-3" id="description" rows="3">{{ $showroom->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Foto</label>
                    <input class="form-control" type="file" id="image" name="image">
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status Pembayaran</label><br>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="lunas" value="Lunas" {{ $showroom->status == 'Lunas' ? 'checked' : '' }}>
                        <label class="form-check-label" for="lunas">Lunas</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="belum_lunas" value="Belum-Lunas" {{ $showroom->status == 'Belum-Lunas' ? 'checked' : '' }}>
                        <label class="form-check-label" for="belum_lunas">Belum Lunas</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
            </form>
        </div>
    </div>
</main>
<!-- end of main -->
@endsection