@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
              <img src="/uploads/pictures/{{$user->picture}}" style="width:250px; height:250px; float:left; border-radius:25%; margin-right:50px">
              <h1> Welcome! {{$user->name}} </h1>
              <form enctype="multipart/form-data" action="/profile" method="POST">
                <label> Change Profile Picture </label>
                <input type="file" name="picture">
                <input type="hidden" name="_token" value="{{csrf_token()}}"><br>
                <input type="submit" class="btn btn-md btn-primary">
              </form>
        </div>
    </div>
</div>
@endsection
