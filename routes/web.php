<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
