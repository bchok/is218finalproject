@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
              <h1> Welcome! {{$user->name}} </h1>
        </div>
    </div>
</div>
@endsection