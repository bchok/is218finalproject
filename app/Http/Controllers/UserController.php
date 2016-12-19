<?php

namespace finalproject\Http\Controllers;

use Illuminate\Http\Request;

use finalproject\Http\Requests;

use Auth;

use Image;

class UserController extends Controller
{
    //
    public function profile(){
      return view('profile', array('user' => Auth::user()));
    }

    public function update_pic(Request $request){
      if($request->hasFile('picture')){
        $picture = $request->file('picture');
        $filename = time() . '.' . $picture->getClientOriginalExtension();
        Image::make($picture)->resize(250, 250)->save(public_path('/uploads/pictures/' . $filename));

        $user = Auth::user();
        $user->picture = $filename;
        $user->save();
      }
      return view('profile', array('user' => Auth::user()));

    }
}
