<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function showBlog($url)
    {
        $post = Post::where('url', $url)->with('types')->first();
        $posts = Post::where('post_type_id', $post->post_type_id)->where('id', '!=', $post->id)->with('types')->limit(6)->get();
        $types = PostType::all();
        return view('show-blog')
        ->with('post', $post)
        ->with('posts', $posts)
        ->with('types', $types);
    }

    public function tag($tag)
    {
        $type = PostType::where('name', $tag)->first();
        $posts = Post::where('post_type_id', $type->id)->with('types')->get();
        return view('tags')
        ->with('type', $type)
        ->with('posts', $posts);
    }
}
