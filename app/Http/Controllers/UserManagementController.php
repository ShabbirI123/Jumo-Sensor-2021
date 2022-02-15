<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserManagementController extends Controller
{
    function createUser(Request $request) {
        $remember_token =  Str::random(10);
        $password = Hash::make($request->password);

        DB::insert('INSERT INTO users (name, email, password, remember_token, role) VALUES (?, ?, ?, ?, ?)', [$request->name, $request->email, $password, $remember_token, $request->role]);

        return redirect('/users')->with('success', 'User created successfully');;
    }

    function changePassword(Request $request) {
        $name = Auth::user()->name;
        $password = Hash::make($request->npassword);
        $timestamp = now();

        DB::table('users')->where('name', $name)->update(['password' => $password, 'updated_at' => $timestamp]);


        //DB::update("UPDATE users SET password = ? WHERE name = $name", [$request->npassword]);
        //DB::update("UPDATE users SET updated_at = ? WHERE name = $name", now());

        return redirect('/profile')->with('success', 'Password successfully changed');;

    }
}
