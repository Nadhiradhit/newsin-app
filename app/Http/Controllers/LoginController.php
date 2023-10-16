<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function index(){
        $title = "NewsIN Login Admin";
        return view("auth.login", compact("title"));
    }

    public function login(Request $request){
        
    }

    public function logout(){

    }
}
