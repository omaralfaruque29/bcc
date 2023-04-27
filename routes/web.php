<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
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

Route::get('/teacher', function () {return "teacher form";});
