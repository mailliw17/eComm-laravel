@extends('master')

@section('content')

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 offset-sm-4">
            <h3>Create new account</h3>
            <form action="register" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input name="name" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Enter username" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1"
                        placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary">Create account</button>
            </form>
        </div>
    </div>
</div>

@endsection