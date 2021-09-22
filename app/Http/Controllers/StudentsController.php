<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\User;
use App\Helpers\Helper;
use Validator;

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
    public function add_student(request $request){
        $this->validate ($request, [
            'a_date' => ['required'],
            'a_year' => ['required'],
            'a_grade' => ['required'],
            'fname' => ['required', 'string', 'max:255'],
            'mname' => ['string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'gender' => ['required'],
            'dob' => ['required'],
            'c_school' => ['string', 'max:255'],
            'parent' => ['string', 'max:255'],
            'p_relation' => ['string'],
            
        ],[
            'fname.required' => "The :value First Name is required.",
            'lname.required' => "The :value Last Name is required.",
            'a_grade.required' => "The :value Admission Grade is required.",
        ]);
        
         $generator = Helper::IDGenerator(new Students, 'Student_id', 5, 'STD');
         $newstudent=new Students();
         $newstudent->Student_id->$generator;
         $newstudent->a_date=$request->input('a_date');
         $newstudent->a_year=$request->input('a_year');
         $newstudent->a_grade=$request->input('a_grade');
         $newstudent->fname=$request->input('fname');
         $newstudent->mname=$request->input('mname');
         $newstudent->lname=$request->input('lname');
         $newstudent->gender=$request->input('gender');
         $newstudent->dob=$request->input('dob');
         $newstudent->c_school=$request->input('c_school');
         $newstudent->parent=$request->input('parent');
         $newstudent->p_relation=$request->input('p_relation');
         $newstudent->save(); 
         return redirect ('/admin_students')->with('success', 'New Student Successfully Added!');
    }

    public function getStudent($id)
    {    //0r Request $Reguest, $id
         $student = Students::FindorFail($id);
         return view('admin.admin_edit_student')->with('student', $student);
    }

    public function UpdateStudent(Request $request, $id)
    {
        $newstudent=Students::find($id);
         $newstudent->a_date=$request->input('a_date');
         $newstudent->a_year=$request->input('a_year');
         $newstudent->a_grade=$request->input('a_grade');
         $newstudent->fname=$request->input('fname');
         $newstudent->mname=$request->input('mname');
         $newstudent->lname=$request->input('lname');
         $newstudent->gender=$request->input('gender');
         $newstudent->dob=$request->input('dob');
         $newstudent->c_school=$request->input('c_school');
         $newstudent->parent=$request->input('parent');
         $newstudent->p_relation=$request->input('p_relation');
         $newstudent->update(); 
         return redirect ('/admin_students')->with('success', 'Changes Successfully changed!');
    }
    public function deleteStudent($id){
        $student=Students::FindorFail($id);
        $student->delete();
        return redirect('/admin_students')->with('success', 'Student successfully deleted!');
    } 
}
