<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin', function () {return view('admin_login_page');});
Route::get('/admin-signup', [AdminController::class, 'create']);
Route::post('/create-admin', [AdminController::class, 'store']);
Route::post('/admin-login', [AdminController::class, 'login']);
Route::get('/admin-dashboard', [AdminController::class, 'showAdminDashboard']);
Route::get('/get-admin', [AdminController::class, 'getAdmin']);

Route::get('/add-student-page', [StudentController::class, 'create']);
Route::post('/add-student', [StudentController::class, 'store']);
Route::get('/all-student', [StudentController::class, 'index']);
Route::get('/delete-student/{id}', [StudentController::class, 'destroy']);
Route::get('/edit-student/{id}', [StudentController::class, 'edit']);

Route::get('/add-teacher-page', [TeacherController::class, 'create']);
Route::post('/add-teacher', [TeacherController::class, 'store']);
Route::get('/all-teacher', [TeacherController::class, 'index']);

Route::get('/teacher', function () {return "teacher form";});
