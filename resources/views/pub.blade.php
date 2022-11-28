@extends('welcome')

@section('container')
<div class="publisher d-grid gap-5" >
    @foreach ($publisher as $pub)
    <div class="judul-pub" style="background-color: grey; color: white">
        <h4>Publichser Name : {{ $pub->name }}</h4>
        <h4>Address : {{ $pub->address }}</h4>
        <h4>Phone : {{ $pub->phone }}</h4>
        <h4>Email : {{ $pub->email }}</h4>
    </div>
    
    @endforeach
</div>
@endsection