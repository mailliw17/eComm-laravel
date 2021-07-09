<?php
use App\Http\Controllers\ProductController;
// untuk cek kalau ga login bakal ditendang ke login
$total = 0;
if(Session::has('user')) {
  $total = ProductController::cartItem();
} 
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">E-Comm</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/myorders">Order</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/cartlist">Cart ({{$total}})</a>
      </li>
    </ul>
    @if (Session::has('user'))
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Hello, {{Session::get('user')['name']}}"
        aria-label="Search" readonly>
      <a href="/logout" class="btn btn-outline-danger my-2 my-sm-0">
        Logout
      </a>
    </form>
    @else
    <a class="nav-link" href="/register">Register</a>
    @endif
  </div>
</nav>