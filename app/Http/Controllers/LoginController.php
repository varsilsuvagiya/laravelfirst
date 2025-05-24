<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index(){
        return view('login');
    }
    function login(Request $req){
        $req->session()->put('user', $req->input('email'));

        return response()->json(['success' => true]);

    }

}
