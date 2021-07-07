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

    public function dashboard(){
        return view ('admin.admin_dashboard');
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
}
