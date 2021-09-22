<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademicsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function terms(){
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
}
