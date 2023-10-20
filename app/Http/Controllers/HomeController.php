<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class HomeController extends Controller
{
    public function home(){
        $title = "NewsIN";
        return view("home", compact("title"));
    }

    public function index(){
        $title = "Dashboard Admin";

        // Read Database Post
        $post = Post::simplePaginate(5);
        $category = Category::simplePaginate(5);
        return view("admin.index", ["postData" => $post, "categoryData" => $category], compact("title"));
    }
}

