<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function checklogin(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'password' => 'required|min:3'
        ]);

        $user_data = array(
            'name' => $request->get('name'),
            'password' => $request->get('password'),
        );

        if (Auth::attempt($user_data)) {

            if (Auth::user()->updated_at === null) {
                return redirect('/profile')->with('info', 'Please change your login credentials');
            } else {
                return redirect('/home');
            }
        } else {
            return back()->with('error', 'Wrong Login Details');
        }

    }

    function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
