<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //

    public function login(){
        $title = "NewsIN Login Admin";
        return view("auth.login", compact("title"));
    }

    public function authenticating(Request $request){
        $credentials = $request->validate([
            "email" => ["required", "email"],
            "password" => ["required"]
        ]);

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended("/news");
        }

            Session::flash("status", "failed");
            Session::flash("message", "Login Wrong!!");

            return redirect("/login");
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect("/");
    }
}
