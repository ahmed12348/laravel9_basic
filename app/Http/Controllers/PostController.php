<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    
    public function store(Request $request)
    {
        DB::table('posts')->insert([
         'title'=>$request->title,
         'body'=>$request->body,
        ]);
        return response('yrs you insert');
        // return view('posts.create');
    }
}
