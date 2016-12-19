@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
              <form action="/editprofile" method="POST">
                &nbsp;&nbsp;<label> Update Email </label>
                <input type="text" name="updateemail" style="float:left"><br>
                <input type="submit" class="btn btn-sm">
              </form>
              <form action="/editprofile" method="POST"><br>
                &nbsp;&nbsp;<label> Update Password </label>
                <input type="text" name="updatepass" style="float:left"><br>
                <input type="submit" class="btn btn-sm">
              </form>
              <form action="/editprofile" method="POST"><br>
                &nbsp;&nbsp;<label> Update Name </label>
                <input type="text" name="updatename" style="float:left"><br>
                <input type="submit" class="btn btn-sm">
              </form>
        </div>
    </div>
</div>
@endsection
