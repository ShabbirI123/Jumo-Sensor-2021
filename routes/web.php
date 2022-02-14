<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DownloadFileController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\RecommendationController;

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

Route::group(['middleware' => 'user.auth'], function () {
    Route::view('/profile', 'loggedIn/profile');
    Route::view('/home', 'loggedIn/home');
    Route::view('/users', 'loggedIn/users');
    Route::view('/dashboard', 'loggedIn/dashboard');
    Route::view('/profile', 'loggedIn/profile');
    Route::view('/recommendation', 'loggedIn/recommendation');
    Route::view('/download', 'loggedIn/download');
    Route::view('/settings', 'loggedIn/settings');
});

Route::post('/checklogin', [LoginController::class, 'checklogin']);

Route::get('/logout', [LoginController::class, 'logout']);

Route::post('/users', [UserManagementController::class, 'createUser']);

Route::post('/profile', [UserManagementController::class, 'changePassword']);

Route::post('/save_occupancy', [RecommendationController::class, 'save_occupancy']);

Route::get('getData', [DownloadFileController::class, 'getData']);

Route::get('recommendation', [RecommendationController::class, 'get_recommendation']);

