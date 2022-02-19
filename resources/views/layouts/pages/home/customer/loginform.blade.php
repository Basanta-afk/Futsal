@extends('layouts.master')
@section('content')

    <div class="login-container">
        <div class="jumbotron">
            <h3><center><b>LogIn With Us</b></center></h3>
            <form method="post" action="" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="YourEmail"/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password"/>
                </div>
                
                    <button type="submit" class="btn btn-primary">LogIn</button>
            </form>
        </div>
    </div>

@endsection