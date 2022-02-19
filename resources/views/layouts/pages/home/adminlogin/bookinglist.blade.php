@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Booking Lists</h4>
            </div>
            <div class="card-body">
                 <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Date</th>
                            <th>Time</th>
                        </tr>
                        <tbody>
                            @foreach($books as $book)
                            <tr>
                                <td>{{$book->id}}</td>
                                <td>{{$book->name}}</td>
                                <td>{{$book->phone}}</td>
                                <td>{{$book->date}}</td>
                                <td>{{$book->time}}</td>
                                <!-- <td>
                                    <a href="/edit-time/{{ $book->time}}" class="btn btn-success">Edit</a>
                                </td> -->
                                <td>
                                <form action="{{$book->id}}" method="post">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
         </div> 
    </div>  
</div>
   
@endsection

@section('scripts')

@endsection