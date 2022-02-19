@extends('layouts.main3')
@section('content')
    <div class="book-container">
        <div class="jumbotron">
            <h3><center><b>Booking</b></center></h3>
            <form method="post" action="{{url('book')}}" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="YourName"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="phone" placeholder="YourPhoneNumber"/>
                </div>
                <input type="hidden" name="futsal_id" value="{{$book->futsal_id}}"/>
                
                <div class="form-group">
                    <input type="time" class="form-control" name="time" min="6:00" max="20:00" placeholder="Starting Time" required >
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" name="date" min="2019-07-22" max="2019-8-8">   
                </div>
                    <button type="submit" class="btn btn-primary">Save</button>
               
            </form>
        </div>
    </div>

@endsection