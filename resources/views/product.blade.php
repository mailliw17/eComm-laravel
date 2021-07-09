@extends('master')
@section('content')

<div class="custom-product">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @foreach ($products as $p)
            <div class="carousel-item {{ $p['id'] == 2 ? 'active' : '' }}">
                <a href="detail/{{$p['id']}}">
                    <img class="d-block w-100 slider-img" src="{{ $p['gallery'] }}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block slider-text">
                        <h5>{{ $p['name'] }}</h5>
                        <p>{{ $p['description'] }}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="trending-wrapper">
    <h3>Trending Products</h3>
    @foreach ($products as $p)
    <a href="detail/{{$p['id']}}">
        <div class="trending-item">
            <img class="trending-img" src="{{ $p['gallery'] }}">
            <div class="">
                <h5>{{ $p['name'] }}</h5>
            </div>
        </div>
    </a>
    @endforeach
</div>
@endsection