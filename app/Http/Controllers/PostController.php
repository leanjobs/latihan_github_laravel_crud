<?php

namespace App\Http\Controllers;

use App\Models\Post;

//return type View
use Illuminate\View\View;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(): View
    {
        //get posts
        $posts = Post::latest()->paginate(5);

        //render view with posts
        return view('posts.index', compact('posts'));
    }
}
