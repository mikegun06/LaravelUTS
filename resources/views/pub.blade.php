@extends('welcome')

@section('container')
<div class="publisher d-grid gap-5">
    @foreach ($publisher as $pub)
    <div class="judul-pub p-3" style="background-color: grey; color: white; border-radius: 5px">
        <h4>Publichser Name : {{ $pub->name }}</h4>
        <h4>Address : {{ $pub->address }}</h4>
        <h4>Phone : {{ $pub->phone }}</h4>
        <h4>Email : {{ $pub->email }}</h4>
        <a href="{{Route('pubdetail',['id'=>$pub->id])}}" class="btn btn-primary btn-outline-dark" style="background-color: white">Detail</a>
    </div>
    
    @endforeach
</div>
@endsection