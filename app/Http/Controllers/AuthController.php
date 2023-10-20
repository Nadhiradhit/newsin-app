<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

            return redirect("/");
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect("/");
    }
}
