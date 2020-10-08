<?php

namespace App\Http\Controllers;

use App\post;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    public function stampPost() {

        $posts = post::all();
        return response() ->json($posts);

    }

    public function stampBest() {

        $posts = post::where('like', '>', 50)-> get();
        return response() ->json($posts);
    }
}
