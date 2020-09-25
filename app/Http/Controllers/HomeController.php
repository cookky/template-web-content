<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostType;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $post = Post::with('types')->first();
        $posts = Post::with('types')->limit(6)->paginate(3);
        $postAll = Post::with('types')->paginate(6);
        $postsRight = Post::with('types')->limit(4)->get();
        return view('index')
        ->with('post', $post)
        ->with('posts', $posts)
        ->with('postAll', $postAll)
        ->with('postsRight', $postsRight);
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

    public function blogs()
    {
        $posts = Post::with('types')->paginate(18);;
        return view('blogs')
        ->with('posts', $posts);
    }
}
