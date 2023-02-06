<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LandingController extends Controller
{
    //
    public function index(){
        $users = User::all();

        return view('home', ["users" => $users]);
    }
}
