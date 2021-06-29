<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getProfile()
    {
        $user = auth()->user();
        return view('Pages.profile')->with('user', $user);
    }
}
