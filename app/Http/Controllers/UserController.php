<?php

namespace finalproject\Http\Controllers;

use Illuminate\Http\Request;

use finalproject\Http\Requests;

use Auth;

class UserController extends Controller
{
    //
    public function profile(){
      return view('profile', array('user' => Auth::user()));
    }
}
