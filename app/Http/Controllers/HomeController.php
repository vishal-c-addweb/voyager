<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    /**
     * Show the blog post.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function posts()
    {
        $post = Post::all();
        return view('posts',compact('post'));
    }
    /**
     * Show the single blog post.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function post($id)
    {
        $post = Post::find($id);
        return view('post',compact('post'));
    }
    
}
