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
        $parent = Parents::OrderBy('created_at', 'asc')->paginate(10); //fetches all students
        return view('admin.admin_parents')->with('parent', $parent);
    }
    public function new_parent(){
        return view('admin.admin_new_parent');
    }
    public function add_parent(request $request){
        $this->validate ($request, [
            'fname' => ['required', 'string', 'max:255'],
            'mname' => ['string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'gender' => ['string', 'max:255'],
            'username' => ['string', 'max:255'],
            'occupation' => ['string', 'max:255'],
            'nationality' => ['string', 'max:255'],
            'b_country' => ['string', 'max:255'],
            'language' => ['string', 'max:255'],
            'mobile' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'description' => ['string'],
            
        ],[
            'fname.required' => "The :value First Name is required.",
            'lname.required' => "The :value Last Name is required.",
            'email.required' => "The :value Email Address is required.",
            'mobile.required' => "The :value Mobile Number is required.",
        ]);
         $newparent=new Parents();
         $newparent->fname=$request->input('fname');
         $newparent->mname=$request->input('mname');
         $newparent->lname=$request->input('lname');
         $newparent->gender=$request->input('gender');
         $newparent->username=$request->input('username');
         $newparent->occupation=$request->input('occupation');
         $newparent->nationality=$request->input('nationality');
         $newparent->b_country=$request->input('b_country');
         $newparent->language=$request->input('language');
         $newparent->mobile=$request->input('mobile');
         $newparent->email=$request->input('email');
         $newparent->description=$request->input('description');
         $newparent->save(); 
         return redirect ('/admin_parents')->with('success', 'New Parent Successfully Added!');
    }
    public function getParent(){
        return view('admin.admin_edit_parent');
    }
    public function UpdateParent(Request $request, $id)
    {
        $newparent= Parents::find($id);
         $newparent->fname=$request->input('fname');
         $newparent->mname=$request->input('mname');
         $newparent->lname=$request->input('lname');
         $newparent->gender=$request->input('gender');
         $newparent->username=$request->input('username');
         $newparent->occupation=$request->input('occupation');
         $newparent->nationality=$request->input('nationality');
         $newparent->b_country=$request->input('b_country');
         $newparent->language=$request->input('language');
         $newparent->mobile=$request->input('mobile');
         $newparent->email=$request->input('email');
         $newparent->description=$request->input('description');
         $newparent->update(); 
         return redirect ('/admin_parents')->with('success', 'Changes Successfully Saved!');
    }
    public function deleteParent($id){
        $newparent=Parents::FindorFail($id);
        $newparent->delete();
        return redirect('/admin_parents')->with('success', 'Parent successfully deleted!');
    } 

}
