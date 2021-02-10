<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

	public function create()
	{
        return view(PLATFORM . '.posts.create');
	}

	public function store()
	{

		$data = request()->validate([
			'caption' => 'required',
			'image' => ['required', 'image']
		]);

		$imagePath = request('image')->store('uploads', 'public');

		auth()->user()->posts()->create([
			'caption' => $data['caption'],
			'image' => $imagePath
		]);

		return redirect('/user/' . auth()->user()->slug);
	}
}
