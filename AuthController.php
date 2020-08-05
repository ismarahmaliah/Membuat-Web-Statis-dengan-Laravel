<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(){
        return view('form');
    }

    public function register(){
        $fname= $request['fname'];
        $lname= $request['lname'];
        return view('form', ['fname' => $fname, 'lname' => $lname]);
    }
    public function selamatdatang(Request $request){
        $fname= $request->input('fname');
        $lname= $request->input('lname');
        return view('selamatdatang', ['fname' => $fname, 'lname' => $lname]);
        
    }
}
