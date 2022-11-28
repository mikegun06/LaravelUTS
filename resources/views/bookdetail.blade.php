@extends('welcome')

@section('container')
<div class="judul p-1 mb-2" style="background-color: grey; color: white">
    <h3>Book Detail</h3>
</div>
<div class="col">`
    @foreach ($bookdetail as $bd)
    <div class="card">
        <img src="{{ $bd->image }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $bd->title }}</h5>
            <h5 class="card-title">{{ $bd->author }}</h5>
            <h5 class="card-title">{{ $bd->publisher }}</h5>
            <h5 class="card-title">{{ $bd->year }}</h5>
            <p class="card-text">{{ $bd->synopsis }}</p>
        </div>
    </div>
    @endforeach
</div>
@endsection