@extends('master')
@section('content')

<div class="custom-product">

    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>My order history</h4>
            @foreach ($orders as $o)
            <div class="row searched-item cart-list-divider">
                <div class="col-sm-3">
                    <a href="detail/{{$o->id}}">
                        <img class="trending-img" src="{{$o->gallery}}" alt="">
                    </a>
                </div>

                <div class="col-sm-3">
                    <div>
                        <h2>{{$o->name}}</h2>
                        <p>{{$o->description}}</p>
                        <p>$ {{$o->price}}</p>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div>
                        <p>Status : {{$o->status}}</p>
                        <p>Payment Method : {{$o->payment_method}}</p>
                        <p>Payment Status : {{$o->payment_status}}</p>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection