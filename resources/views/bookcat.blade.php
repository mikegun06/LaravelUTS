@extends('welcome')
@section('container')

<div class="book">
  <div class="container">
    <div class="title">
      @foreach ($category as $cat)
      <h1 class="text-left text-dark text-uppercase mb-3">{{$cat->name}} Book</h1>
    </div>
    <div class="row">
      @foreach ( $cat->BookCategory as $bk )
      <div class="col-md-4">
        <div class="card">
          <img src="{{$bk->image}}" class="img-fluid"/>
          <div class="card-body text-dark">
            <h4 class="card-title text-left mb-3">{{$bk->title}}</h5>
            <h6 class="card-text text-left mb-2" style="font-size: 16px">by</h6>
            <h5 class="card-text text-left mb-4">{{$bk->author}}</h6>
            <div class="detail-btn d-md-flex justify-content-md-left ">
              <a href="{{Route('bookdetail',['id'=>$bk->id])}}" type="button" class="btn btn-outline-dark">Detail</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      @endforeach
    </div>
  </div>
</div>
@endsection
