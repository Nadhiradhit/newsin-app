<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $title = "Dashboard Admin";

        // Read Database Post
        $user = User::all();
        $post = Post::with('category')->get();
        // dd($post);
        return view("admin.index", ["postData" => $post, "userData" => $user], compact("title"));
    }

    public function create(){
        
        $title = "Dashboard Admin | News";

        $category = Category::select('id', 'name')->get();

        return view("admin.create", ["categoryData" => $category],compact("title"));
    }

    public function store(Request $request){

        $post = new Post;
        $post->header = $request->header;
        $post->category_id = $request->category_id;
        $post->author = $request->author;
        $post->description_news = $request->description_news;
        $post->content = $request->content;

        $post->save();

        return redirect()->route("admin.create");

        // Debug
        // dd($request->all());
    }

    public function show($id){
        $title = "Dashboard Admin | Detail";
        $post = Post::with(['category'])
            ->findOrFail($id);

        return view("admin.post.detail", ["post" => $post],compact("title"));
    }

    public function delete($id){
        $post = Post::findOrFail($id);
        return view("admin.delete", ['post' => $post]);
    }
    


}
