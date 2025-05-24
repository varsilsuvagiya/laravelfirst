<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Usercontroller extends Controller
{
    function index(){

        // $users = DB::table('users')->get();
        $users = \App\Models\Users::all();
        return view('user',['users'=>$users]);
    }
}
