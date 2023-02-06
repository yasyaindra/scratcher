<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class CategoryController extends Controller
{
    //
    public function index(){
        return view('categories.index', ['categories' => Category::all()]);
    }

    public function show(Category $category){
        return view('categories.post', ['posts' => $category->posts->load('category','user')]);
    }
}
