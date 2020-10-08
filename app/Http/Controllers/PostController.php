<?php

namespace App\Http\Controllers;

use App\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {

        $posts = post::all();

        return view('home', compact ('posts'));
    }

    public function create(){
        return view('create');
    }

    public function store (Request $request) {

        $data = $request -> validate([

            'title' => 'required|min:3' ,
            'text' => 'required|min:10' ,
            'category' => 'required|min:3' ,
            'like' => 'required|gte:0' ,
            'dislike' => 'required|gte:0'
        ]);

        $post = post::create($data);

        return redirect() ->route('index');
    }

}
