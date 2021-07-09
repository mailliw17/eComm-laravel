@extends('master')
@section('content')

<div class="container custom-ordernow">
    <div class="col-sm-10">
        <table class="table">
            <tbody>
                <tr>
                    <th scope="row">Amount</th>
                    <td>$ {{$total}}</td>
                </tr>
                <tr>
                    <th scope="row">Tax</th>
                    <td>$ 0</td>
                </tr>
                <tr>
                    <th scope="row">Delivery</th>
                    <td>$ 10</td>
                </tr>
                <tr>
                    <th scope="row">Total Amount</th>
                    <td>$ {{$total + 10}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="container">
    <form action="/orderplace" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <input type="text" name="address" class="form-control" aria-describedby="emailHelp"
                placeholder="Enter your adress" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Payment Option</label>
            <div class="form-check">
                <input class="form-check-input" name="payment" type="radio" name="exampleRadios" id="exampleRadios1"
                    value="Transfer Bank">
                <label class="form-check-label" for="exampleRadios1">
                    Transfer Bank
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="payment" type="radio" name="exampleRadios" id="exampleRadios2"
                    value="QRIS">
                <label class="form-check-label" for="exampleRadios2">
                    QRIS
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="payment" type="radio" name="exampleRadios" id="exampleRadios3"
                    value="Cash on Delivery">
                <label class="form-check-label" for="exampleRadios3">
                    Cash on Delivery
                </label>
            </div>
        </div>
        <div class="offset-sm-8" style="margin-bottom: 10px">
            <button type="submit" class="btn btn-primary">Order Now</button>
        </div>
    </form>
</div>


@endsection