@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
              <img src="/uploads/pictures/{{$user->picture}}" style="width:250px; height:250px; float:left; border-radius:25%; margin-right:50px">
              <h1> Welcome! {{$user->name}} </h1>
        </div>
    </div>
</div>
@endsection
