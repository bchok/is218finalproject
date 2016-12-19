@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
              <table border="2">
                  <th> Registered Users </th>
                @foreach($users as $user)
                  <tr><td> {{$user->name}} </td></tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
