<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;

class PostController extends Controller
{
	public function create()
	{
        return view(PLATFORM . '.posts.create');
	}
}
