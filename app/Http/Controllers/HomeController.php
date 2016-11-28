<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function user()
    {
        $users = User::all();
        return view('users',compact('users'));
    }

    public function post()
    {
        $posts = Post::join('users', 'users.id', '=', 'posts.user_id')
            ->select('posts.*', 'users.name as user_name')->paginate(100);
        return view('posts',compact('posts'));
    }
}
