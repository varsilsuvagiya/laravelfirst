<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class Namecontroller extends Controller
{
    function index($name){
        if(View.exists('name')){
            return view('name',['user'=>$name]);
        }
        else{
            return "view does not exist";
        }

        // return "$name";
    }

    function show(){
        $arr = array("one","two","three");
        $name="varsil";

        return view('name',['arr'=>$arr,'name'=>$name]);
    }
}
