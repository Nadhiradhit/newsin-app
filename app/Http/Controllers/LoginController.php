<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    function index(){
        $title = "NewsIN Login Admin";
        return view("auth.login", compact("title"));
    }
}
