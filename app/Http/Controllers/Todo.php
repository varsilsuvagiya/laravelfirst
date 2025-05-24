<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class Todo extends Controller
{
    //
    public function index()
    {
        //! recommended
        // $response = Http::get('https://jsonplaceholder.typicode.com/todos');
        //! use bcz it gives ssl certificate error
        // $response = Http::withoutVerifying()->get('https://jsonplaceholder.typicode.com/todos');

        // $todos = $response->json();
        // return view('todo', ['todos' => $todos]);

        //! insert
          $response = DB::table('todos')->insert([
                'userId' => 11,
                'id' => 1,
                'title' => 'laravel tutorial',
                'completed' => false
            ]);


        //! update
        // $response = DB::table('todos')
        //     ->where('id', 1)
        //     ->update(['title' => 'laravel tutorial update']);

        //! delete
        // $response = DB::table('todos')->where('id', 1)->delete();

        //get
        $todos = DB::table('todos')->get();
        if ($response) {
            echo "success";
        }
        return view('todo', ['todos' => $todos]);
    }
}
