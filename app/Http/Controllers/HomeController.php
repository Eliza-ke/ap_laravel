<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $data = Post::all();
        return view('home',compact('data')); // compact is data passing to home.blade.php
    }
    
}
