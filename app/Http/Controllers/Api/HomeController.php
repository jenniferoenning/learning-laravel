<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getPosts()
    {
        $allPosts = Post::all();
        if($allPosts){
            return response()->json($allPosts);
        }
        else {
            return response()->json(false);
        }
    }
}   