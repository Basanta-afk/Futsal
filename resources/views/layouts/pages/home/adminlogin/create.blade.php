@extends('layouts.main')
@section('content')

    <div class="form-container">
        <div class="jumbotron">
            <h3><center><b>Add Futsal</b></center></h3>
            <form method="post" action="{{url('adminlogin')}}" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="futsalname" placeholder="Futsal Name"/>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image"/>
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div><br><br>
                
                    <button type="submit" class="btn btn-primary">Save</button>
                
            </form>
        </div>
    </div>

@endsection

@section('scripts')

@endsection