@extends('temp')

@section('title', 'Selen Tatsuki')


@section('content')
    @include('navbar')
    <div class = "d-flex justify-content-around" style = "margin: 30px">
        @for($i = 0; $i < count($product); $i++)
            <div class="card" style="width: 18rem; margin: 30px">
            <img src= {{ $image [$i] }} class="card-img-top"alt="...">
            <div class="card-body">
            <h5 class="card-title">{{ $product[$i] }}</h5>
            <p class="card-text">{{ $price[$i] }}</p>
            <a href="#" class="btn btn-primary" style = "margin: 10px; text-align:center">Buy now</a>
            @if($status[$i] == "Closed")
            <div class = "alert alert-danger" style = "margin: 10px; text-align:center">
                Closed
            </div>
            @else
            <div class = "alert alert-success" style = "margin: 10px; text-align:center">
                Open
            </div>
            @endif
            </div>
            </div>
        @endfor
    </div>
@endsection