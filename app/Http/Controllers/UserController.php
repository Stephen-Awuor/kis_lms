<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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

    public function ProfileUpdate(){
        
        $this->validate(request(), [
           
        ]);
        $user = auth()->user();
        $user->fname = request('fname');
        $user->lname = request('lname');
        $user->salutation = request('salutation');
        $user->email = request('email');
        $user->phone = request('phone');
        $user->password = bcrypt(request('password'));
        $user->update();
        return redirect ('/home')->with('success', 'Changes Successfully Saved!');
    }
}
