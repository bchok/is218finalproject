@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
              <table border="2" align="center" width="75%">
                  <th style="text-align:center"> Registered Users </th>
                @foreach($users as $user)
                  <tr><td style="text-align:center"> {{$user->name}} </td></tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
