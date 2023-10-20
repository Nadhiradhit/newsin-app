<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function index(){
        $title = "Dashboard Admin";

        // Read Database Post
       
        $post = Post::simplePaginate(5);
        // $post = Post::with('category')->get();
        // dd($post);
        return view("admin.index", ["postData" => $post,], compact("title"));
    }

    public function create(){
        
        $title = "Dashboard Admin | News";

        $category = Category::select("id", "name")->get();

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

        if($post) {
            Session::flash("status", "success");
            Session::flash("message", "Data Berhasil Terinput");
        }
        

        return redirect()->route("admin.create");

        // Debug
        // dd($request->all());
    }

    public function show($id){
        $title = "Dashboard Admin | Detail";
        $post = Post::with(["category"])
            ->findOrFail($id);

        return view("admin.post.detail", ["post" => $post], compact("title"));
    }

    public function edit(Request $request, $id){
        $title = "Dashboard Admin | Edit";
        $post = Post::with(["category"])->findOrFail($id);
        $category = Category::where("id", "!=", $post->category_id)->get(["id", "name"]);
        // dd($post);
        return view("admin.edit", ["post" => $post, "category" => $category], compact("title"));
    }

    public function update(Request $request, $id){
        $post = Post::findOrFail($id);

        $post->header = $request->header;
        $post->category_id = $request->category_id;
        $post->author = $request->author;
        $post->description_news = $request->description_news;
        $post->content = $request->content;
        $post->save();

        return redirect("/news");
        
    }

    public function destroy($id){

        $deletePost = Post::findOrFail($id);
        $deletePost ->delete();

        if($deletePost) {
            Session::flash("status", "success");
            Session::flash("message", "Data Berhasil Dihapus");
        }

        return redirect("/news");
    }
    



}
