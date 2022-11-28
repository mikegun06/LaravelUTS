@extends('welcome')

@section('container')
    @foreach ($pub as $pub)
    <div class="header">
        <table class="pub-detail text-dark mb-3">
            <tr>
                <td>Publisher Name</td>
                <td>:</td>
                <td colspan="2">{{$pub->name}}</td>
            </tr>
            <tr>
                <td>Address</td>
                <td>:</td>
                <td colspan="2">{{$pub->address}}</td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>:</td>
                <td colspan="2">{{$pub->phone}}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td colspan="2">{{$pub->email}}</td>
            </tr>
        </table>
    </div>

    <div class="book">
        <div class="container">
            <div class="row">
                @foreach ($pub->Publisher as $bk)
                <div class="col-md-4">
                    <div class="card" id="movie-img">
                        <img src="{{$bk->image}}" class="img-fluid" id="images"/>
                        <div class="card-body text-dark">
                          <h4 class="card-title text-left mb-3">{{$bk->title}}</h5>
                            <h6 class="card-text text-left mb-2" style="font-size: 16px">by</h6>
                          <h5 class="card-text text-left mb-4">{{$bk->author}}</h6>
                            <div class="detail-btn d-md-flex justify-content-md-left ">
                                <a href="{{Route('bookdetail', ['id'=>$bk->id])}}" type="button" class="btn btn-outline-dark">Detail</a>
                            </div>
                        </div>
                      </div>
                </div>
                @endforeach
            </div>
        </div>
      </div>
      @endforeach
@endsection
