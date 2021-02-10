<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;

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

    public function show($slug)
    {
        $userAuth = Auth::user();
        $user = User::all()->where('slug', $slug)->first();
        if(!$userAuth == null && !$user == null){
            return view(PLATFORM . '.pages.perfil')->with(compact('user','userAuth'));
        }else{
            abort(404);
        }
    }
}
