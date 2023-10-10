<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $title = "Newsin";
        return view("home", compact("title"));
    }
}

