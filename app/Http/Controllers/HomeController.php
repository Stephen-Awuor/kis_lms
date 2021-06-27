<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function home()
    {
        return view('home');
    }
    public function workplace(){
        return view ('Pages.workplace');
    }
    public function teaching(){
        return view ('Pages.teaching');
    }
    public function behaviour(){
        return view ('Pages.behaviour');
    }
    public function reports(){
        return view ('Pages.reports');
    }
    public function profile(){
        return view ('Pages.profile');
    }
}
