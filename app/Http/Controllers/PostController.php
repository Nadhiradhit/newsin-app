<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $title = "Dashboard Admin";

        // Read Database Post
        $post = Post::with('category')->get();
        // dd($post);
        return view("admin.index", ["postData" => $post], compact("title"));
    }

    public function create(){
        
        return view("admin.create");
    }

    public function store(){
        
    }

    


}
