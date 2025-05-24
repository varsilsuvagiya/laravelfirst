<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Models\Todo;

class Todocontroller extends Controller
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
        //   $response = DB::table('todos')->insert([
        //         'userId' => 11,
        //         'id' => 1,
        //         'title' => 'laravel tutorial',
        //         'completed' => false
        //     ]);

        //! update
        // $response = DB::table('todos')
        //     ->where('id', 1)
        //     ->update(['title' => 'laravel tutorial update']);

        //! delete
        // $response = DB::table('todos')->where('id', 1)->delete();

        //! get
        // $todos = DB::table('todos')->get();

        //! insert using model
        $response = Todo::insert([
            'userId' => 12,
            'id' => 1,
            'title' => 'laravel tutorial',
            'completed' => false
        ]);

        //! update using model
        // $response = Todo::where('id', 1)->update(['title' => 'laravel tutorial update']);

        //! delete using model
        // $response = Todo::where('id', 1)->delete();

        //! get using model
        $todos = Todo::all();

        if ($response) {
            echo "success";
        }

        return view('todo', ['todos' => $todos]);
    }
}
