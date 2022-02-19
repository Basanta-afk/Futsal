@extends('layouts.master')
@section('content')

    <div class="register-container">
        <div class="jumbotron">
            <h3><center><b>Register</b></center></h3>
            <form method="post" action="" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="YourName"/>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="YourEmail"/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password"/>
                </div>
                
                    <button type="submit" class="btn btn-primary">Save</button>
                
            </form>
        </div>
    </div>

@endsection