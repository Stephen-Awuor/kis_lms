<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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

    public function updateProfile(){
        $this->validate(request(), [
            'password'=>'required',
            'confirm_password'=>'required'
        ]);
        $user = auth()->user();
        $user->fname = request('fname');
        $user->lname = request('lname');
        $user->salutation = request('salutation');
        $user->email = request('email');
        $user->phone = request('phone');
        $user->password = bcrypt(request('password'));
        $user->confirm_password = bcrypt(request('confirm_password'));
        $user->usertype = request('usertype');
        $user->save();
        return view ('admin.admin_dashboard')->with('success', 'Changes Successfully Saved!');
    }

    public function users(){
        $users = User::OrderBy('created_at', 'asc')->paginate(5); //fetches all users
        return view('admin.admin_users')->with('users', $users);
    }

    public function new_user(){
        return view ('admin.admin_new_user');
    }

    public function addUser(request $request){
        $this->validate ($request, [
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['string', 'max:255'],
            'usertype' => ['required'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ],[
            'fname.required' => "The :value First Name is required.",
            'email.unique' => "This email :attribute has already been taken.",
            'fname.string' => "The First Name should be a string."
        ]);
        
         $newuser=new User();
         $newuser->fname=$request->input('fname');
         $newuser->lname=$request->input('lname');
         $newuser->usertype=$request->input('usertype');
         $newuser->salutation=$request->input('salutation');
         $newuser->email=$request->input('email');
         $newuser->phone=$request->input('phone');
         $newuser->password=bcrypt($request->input('password'));
         $newuser->save(); 
         return redirect ('/admin_users')->with('success', 'New User Successfully Added!');
    }

    public function getUser($id)
    {    //0r Request $Reguest, $id
         $users = User::FindorFail($id);
         return view('admin.admin_edit_user')->with('users', $users);
    }

    public function UpdateUser(Request $request, $id)
    {
        $users=User::find($id);
        $users->fname=$request->input('fname');
         $users->lname=$request->input('lname');
         $users->usertype=$request->input('usertype');
         $users->salutation=$request->input('salutation');
         $users->email=$request->input('email');
         $users->phone=$request->input('phone');
         $users->password=bcrypt($request->input('password'));
         $users->update(); 
        return redirect('/admin_users')->with('success', 'Changes Successfully Saved!');
    }

    public function deleteUser($id){
        $users=User::FindorFail($id);
        $users->delete();
        return redirect('/admin_users')->with('success', 'User successfully deleted!');
    }
}
