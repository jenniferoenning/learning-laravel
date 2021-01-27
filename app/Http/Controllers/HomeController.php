<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        return view(PLATFORM . '.pages.index')->with(compact('users'));
    }
/*
    public function changeSlugUsers()
    {
        $changeSlugUsers = User::all();

        foreach ($changeSlugUsers as $changeSlugUser) {
            if($changeSlugUser->slug === null) {
                $changeSlugUser->slug = Str::slug($changeSlugUser['name'], '-');
                $changeSlugUser->save();
            }
        }
        dd($changeSlugUsers);
    }*/
}
