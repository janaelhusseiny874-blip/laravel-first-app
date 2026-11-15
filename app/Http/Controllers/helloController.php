<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class helloController extends Controller
{
    public function hello(){
        return "hello laravel";

    }
    public function posts(){
        $posts = post::all();
        return view("posts",compact("posts"));

    }

}
