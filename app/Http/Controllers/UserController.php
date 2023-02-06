<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        $id = auth()->user()->id;
        $post = Post::where('user_id', $id)->count();
        return view('about', ['count' => $post]);
    }

    public function show($username){
        $posts = Post::whereUserId(User::whereUsername($username)->first()->id)->get();
        // dd($posts);
        return view('users.post', ['posts' => $posts->load('category','user')]);
    }
}
