<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Todo extends Controller
{
    //
    public function index()
    {
        //! recommended
        // $response = Http::get('https://jsonplaceholder.typicode.com/todos');
        //! use bcz it gives ssl certificate error
        $response = Http::withoutVerifying()->get('https://jsonplaceholder.typicode.com/todos');

        $todos = $response->json();
        return view('todo', ['todos' => $todos]);
    }
}
