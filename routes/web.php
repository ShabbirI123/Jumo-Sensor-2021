<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

/*
 * Views which can be accessed without no login
 * */

Route::view('/', 'index');
Route::view('/login', 'login');
Route::view('/profile', 'profile');
Route::view('/home', 'home');

Route::post('/checklogin', [LoginController::class, 'checklogin']);


Route::get('/about',"\App\Http\Controllers\MainController@about");
Route::get('/logout', '\App\Http\Controllers\MainController@logout');
Route::get('/download', '\App\Http\Controllers\MainController@download');
Route::get('/users', '\App\Http\Controllers\MainController@users');
Route::get('/settings', '\App\Http\Controllers\MainController@settings');
Route::get('/dashboard', '\App\Http\Controllers\MainController@dashboard');
Route::get('/export', [\App\Http\Controllers\JumoValueController::class, 'exportData'])->name('export');
Route::post('/users', [\App\Http\Controllers\UserManagementController::class, 'createUser'])->name('createUser');
Route::post('/profile', [\App\Http\Controllers\UserManagementController::class, 'changePassword'])->name('changePassword');


Route::get('jumo_values', [DownloadFile::class,'getData']);

/*
 * Views which can be accessed with login
 * Usage of middleware
 * */
