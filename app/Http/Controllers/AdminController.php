<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\DB;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin_dashboard(){
        return view ('admin.admin_dashboard');
    }
    public function admin_workplace(){
        return view ('admin.admin_workplace');
    }
    public function admin_teaching(){
        return view ('admin.admin_teaching');
    }
    public function admin_students(){
        return view ('admin.admin_students');
    }
    public function admin_configs(){
        return view ('admin.admin_configs');
    }
    public function admin_attendance(){
        return view ('admin.admin_attendance');
    }
    public function admin_academics(){
        return view ('admin.admin_academics');
    }
    public function admin_reports(){
        return view ('admin.admin_reports');
    }
    public function admin_users(){
        return view ('admin.admin_users');
    }
    public function admin_profile(){
        return view ('admin.admin_profile');
    }

    public function getProfile()
    {
        $user = auth()->user();
        return view('admin.admin_profile')->with('user', $user);
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
        $user->save();
        return redirect('admin.admin_profile')->with('success', 'Changes Successfully Saved!');
    }
}
