<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getuserRecord(){

        return view('card');
        dd("This is from User Controller");
    }
    //
}
