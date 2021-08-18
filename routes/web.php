<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => ['auth', 'admin']], function() {
    Route::get('admin_dashboard', function() {
        return view('admin.admin_dashboard');
    });

Route::get('/admin_dashboard', [App\Http\Controllers\AdminController::class, 'admin_dashboard']);
Route::get('/admin_workplace', [App\Http\Controllers\AdminController::class, 'admin_workplace']);
Route::get('/admin_teaching', [App\Http\Controllers\AdminController::class, 'admin_teaching']);
Route::get('/admin_configs', [App\Http\Controllers\AdminController::class, 'admin_configs']);
Route::get('/admin_attendance', [App\Http\Controllers\AdminController::class, 'admin_attendance']);
Route::get('/admin_academics', [App\Http\Controllers\AdminController::class, 'admin_academics']);
Route::get('/admin_reports', [App\Http\Controllers\AdminController::class, 'admin_reports']);
Route::get('/admin_users', [App\Http\Controllers\AdminController::class, 'users']);
Route::get('/admin_profile/{id}',[App\Http\Controllers\AdminController::class, 'getProfile']);
Route::put('/Admin_Profile/{id}',[App\Http\Controllers\AdminController::class, 'updateProfile']);
Route::get('/new_user',[App\Http\Controllers\AdminController::class, 'new_user']);
Route::put('/add-user',[App\Http\Controllers\AdminController::class, 'addUser']);
Route::get('/adminU-edit/{id}',[App\Http\Controllers\AdminController::class, 'getUser']);
Route::put('/adminU-Update/{id}',[App\Http\Controllers\AdminController::class, 'UpdateUser']);
Route::delete('/user-delete/{id}',[App\Http\Controllers\AdminController::class, 'deleteUser']);

Route::get('/admin_students',[App\Http\Controllers\StudentsController::class, 'students']);
Route::get('/new_student',[App\Http\Controllers\StudentsController::class, 'new_student']);
Route::put('/add_student',[App\Http\Controllers\StudentsController::class, 'add_student']);
Route::get('/student-edit/{id}',[App\Http\Controllers\StudentsController::class, 'getStudent']);
Route::put('/update_student/{id}',[App\Http\Controllers\StudentsController::class, 'UpdateStudent']);
Route::delete('/student-delete/{id}',[App\Http\Controllers\StudentsController::class, 'deleteStudent']);

Route::get('/admin_parents',[App\Http\Controllers\ParentsController::class, 'parents']);
});

Route::get('/', [App\Http\Controllers\PagesController::class, 'index']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/workplace', [App\Http\Controllers\HomeController::class, 'workplace']);
Route::get('/teaching', [App\Http\Controllers\HomeController::class, 'teaching']);
Route::get('/behaviour', [App\Http\Controllers\HomeController::class, 'behaviour']);
Route::get('/reports', [App\Http\Controllers\HomeController::class, 'reports']);
Route::get('/profile/{id}', [App\Http\Controllers\UserController::class, 'getProfile']);
Route::put('/updateProfile/{id}', [App\Http\Controllers\UserController::class, 'ProfileUpdate']);
