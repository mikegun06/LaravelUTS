@extends('welcome')

@section('container')
<div class="row row-cols-1 row-cols-md-4 g-4">
    @foreach ($book as $bk)
    <div class="col">
        <div class="card">
            <img src="{{ $bk->image }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $bk->title }}</h5>
                <p class="card-text">{{ $bk->sypnosis }}</p>
                <a href="{{ Route('bookdetail', ['id'=>$bk->id]) }}" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection

