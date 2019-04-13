<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

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
        $id = Auth::id();
        $profile = User::find($id);
        return view('profiles.index')->with('profile', $profile);
        // return view('home');
    }

    public function edit($id)
    {
        $profile = User::find($id);
        return $id;
        return view('profiles.edit')->with('profile', $profile);
    }
}
