<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\terms;
use App\Models\classes;
use DB;


class AcademicsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function term(){
        return view ('admin.term');
    }
    public function classes(){
        return view ('admin.classes');
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
    public function terms(){
        return view ('admin.term');
    }
    public function setup_terms(request $request){
        $this->validate ($request, [
            'term1' => ['required'],
            'start_1' => ['required'],
            'end_1' => ['required'],
            'term2' => ['required'],
            'start_2' => ['required'],
            'end_2' => ['required'],
            'term3' => ['required'],
            'start_3' => ['required'],
            'end_3' => ['required'],
            
        ]);
         $newterm=new terms();
         $newterm->term1=$request->input('term1');
         $newterm->start_1=$request->input('start_1');
         $newterm->end_1=$request->input('end_2');
         $newterm->term2=$request->input('term2');
         $newterm->start_2=$request->input('start_2');
         $newterm->end_2=$request->input('end_2');
         $newterm->term3=$request->input('term3');
         $newterm->start_3=$request->input('start_3');
         $newterm->end_3=$request->input('end_3');
         $newterm->save(); 
         return redirect ('/view_terms')->with('success', 'Academic Calendar Successfully Set!');
    }
    public function view_terms(){
            $term = terms::OrderBy('created_at', 'asc')->paginate(10); //fetches the terms from db
            return view('admin.view_terms')->with('term', $term);
        }
        
    public function add_classes(request $request){
        //dd($request->());
            // $class = $request->class;
            // $code = $request->code;
            // $capacity = $request->capacity;

            foreach($request->class as $key=>$insert) {
                $add_classes = [
                    'class'  => $request->class[$key],
                    'code'  => $request->code[$key],
                    'capacity'  => $request->capacity[$key],
                ];
            }
             DB::table('classes') -> insert($add_classes);
             return redirect ('/classes')->with('success', 'Classes Successfully Set!');
        }
    }
