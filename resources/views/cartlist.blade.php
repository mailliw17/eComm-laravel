@extends('master')
@section('content')

<div class="custom-product">

    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Your Carts</h4>
            <a class="btn btn-success" href="ordernow">Checkout </a> <br><br>
            @foreach ($products as $p)
            <div class="row searched-item cart-list-divider">
                <div class="col-sm-3">
                    <a href="detail/{{$p->id}}">
                        <img class="trending-img" src="{{$p->gallery}}" alt="">
                    </a>
                </div>

                <div class="col-sm-3">
                    <div>
                        <h2>{{$p->name}}</h2>
                        <h5>{{$p->description}}</h5>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div>
                        <h2>$ {{$p->price}}</h2>
                    </div>
                </div>

                <div class="col-sm-3">
                    <a href="removeitem/{{$p->cart_id}}" class="btn btn-warning">Remove from cart</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection