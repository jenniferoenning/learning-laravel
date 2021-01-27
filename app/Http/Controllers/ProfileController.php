<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function perfil()
    {
        $user = Auth::user();
        return view(PLATFORM . '.pages.perfil')->with(compact('user'));
    }

    public function profileUser($name) {
        $users = User::all();
        return view(PLATFORM . '.pages.perfil')->with(compact('users'));
    }
}
