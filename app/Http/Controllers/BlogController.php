<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Response; //Ovo je jako bitno

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);	//Ovo smo dodali zbog testiranja opciono
        dd($posts); // takodje zbog testiranja opciono
        $posts = Post::paginate(10);
        $response = Response::json($posts,200);
        return view('blog.index', compact('posts'));
    }
}
