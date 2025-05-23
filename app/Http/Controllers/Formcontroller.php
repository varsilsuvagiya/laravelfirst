<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Formcontroller extends Controller
{
    //
    function submit(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'age'=>'required|numeric',
            'bio'=>'required'
        ]);

        return $req;
    }
}
