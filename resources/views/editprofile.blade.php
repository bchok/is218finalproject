@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
              <form action="/editprofile" name="updateemail" method="POST">
                &nbsp;&nbsp;<label> Update Email </label>
                <input type="text" name="newemail" style="float:left"><br><br>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="submit" class="btn btn-sm">
              </form>
              <form action="/editprofile" name="updatepass" method="POST"><br>
                &nbsp;&nbsp;<label> Update Password </label>
                <input type="text" name="updatepass" style="float:left"><br><br>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="submit" class="btn btn-sm">
              </form>
              <form action="/editprofile" name="updatename" method="POST"><br>
                &nbsp;&nbsp;<label> Update Name </label>
                <input type="text" name="updatename" style="float:left"><br><br>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="submit" class="btn btn-sm">
              </form>
        </div>
    </div>
</div>
@endsection
