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
Route::view('/about', 'about');
Route::view('/profile', 'loggedIn/profile');
Route::view('/home', 'loggedIn/home');
Route::view('/users', 'loggedIn/users');
Route::view('/dashboard', 'loggedIn/dashboard');
Route::view('/profile', 'loggedIn/profile');
Route::view('/download', 'loggedIn/download');
Route::view('/settings', 'loggedIn/settings');


Route::post('/checklogin', [LoginController::class, 'checklogin']);


// TODO: Logout schöner schreiben
Route::get('/logout', '\App\Http\Controllers\LoginController@logout');
// TODO: Implementieren vom Download
//Route::get('/export', [\App\Http\Controllers\JumoValueController::class, 'exportData'])->name('export');
// TODO: Create User muss implementiert werden
//Route::post('/users', [\App\Http\Controllers\UserManagementController::class, 'createUser'])->name('createUser');
// TODO: User wird beim ersten Aufruf aufgefordert PW zu ändern
//Route::post('/profile', [\App\Http\Controllers\UserManagementController::class, 'changePassword'])->name('changePassword');


Route::get('jumo_values', [DownloadFile::class,'getData']);

/*
 * Views which can be accessed with login
 * Usage of middleware
 * */
