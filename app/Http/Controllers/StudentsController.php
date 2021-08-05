<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\User;

class StudentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin_students(){
        return view ('admin.admin_students');
    }
    public function students(){
        $student = Students::OrderBy('created_at', 'asc')->paginate(10); //fetches all students
        return view('admin.admin_students')->with('student', $student);
    }
    public function new_student(){
        return view ('admin.admin_new_student');
    }

}
