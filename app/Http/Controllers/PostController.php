<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    //
    public function index(){
        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('user')) {
            $user = User::firstWhere('username', request('user'));
            $title = ' by ' . $user->name;
        }


        return view('posts.index', [
            'title' => "All Posts" . $title,
            'posts' => Post::latest()->filter(request(['search', 'category', 'user']))->simplepaginate(5)->withQueryString()]
        );
    }

    public function show(Post $post){
        return view('posts.post',[
            "title" => 'Single Post',
            "post" => $post
        ]);
    }
}
