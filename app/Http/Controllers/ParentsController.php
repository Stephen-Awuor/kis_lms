<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Parents;

class ParentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function parents(){

        return view ('admin.admin_parents');
    }
}
