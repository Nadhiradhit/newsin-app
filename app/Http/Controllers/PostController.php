<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $title = "Dashboard Admin";

        // Read Database
        $post = Post::all();
        // dd($post);
        return view("admin.index", ["postData" => $post], compact("title"));
    }


}
