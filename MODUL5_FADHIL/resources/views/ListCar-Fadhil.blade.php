@extends('layouts.main')
@section('list')
    active
@endsection
@section('container')

<section id="list">
  <div class="container">
    <div>
      <h1>My Show Room</h1>
      <p>List Show Room Fadhil - 1202202269</p>
      <div class="d-flex gap-5">
        @foreach ($showroom as $row)
          <div class='card cardcontent' style='width: 18rem;'>
          <img src='{{ asset('storage/'.$row->image) }}' class='card-img-top' alt='fotomobil' style='padding: 16px;'>
          <div class='card-body'>
              <h5 class='card-title'>{{ $row->name }}</h5>
              <p class='card-text'>{{ $row->description }}</p>
              <span class='d-flex gap-2'>
                <a href="{{ '/detail/'.$row->id }}" class='btn btn-success' width:140px; height: 36px;'>Detail</a>
                <form action="{{ url('list/'.$row->id) }}" method='post'>
                  @csrf
                  @method('DELETE')
                  <button type='submit' class='btn btn-danger' width:140px; height: 36px;'>Delete</button>
                </form>
              </span>
          </div>
          </div>
        @endforeach
      </div>  
    </div>
  </div>
</section>

@endsection
