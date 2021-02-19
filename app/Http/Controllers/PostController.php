<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

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

		$image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);

		auth()->user()->posts()->create([
			'caption' => $data['caption'],
			'image' => $imagePath
		]);

		return redirect('/user/' . auth()->user()->slug);
	}

	public function show ()
	{
		$user = Auth::user();

		return view(PLATFORM . '.posts.posts')->with(compact('user'));
	}

	public function edit ($id)
	{
		$post = Auth::user()->posts->where('id', $id)->first();

		return view(PLATFORM . '.posts.edit')->with(compact('post'));
	}

	public function update($id)
	{
		$data = request()->validate([
			'caption' => 'required',
			'image' => ''
		]);

		dd($data);
	}
}
