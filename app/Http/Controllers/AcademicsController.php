<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademicsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function term(){
        return view ('admin.term');
    }
    public function catalogs(){
        return view ('admin.catalogs');
    }
    public function courses(){
        return view ('admin.courses');
    }
    public function sections(){
        return view ('admin.sections');
    }
    public function grades(){
        return view ('admin.grades');
    }
    public function grade_breakdown(){
        return view ('admin.grade_breakdown');
    }
    public function templates(){
        return view ('admin.templates');
    }
    public function grade_groups(){
        return view ('admin.grade_groups');
    }
}
