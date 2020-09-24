<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function showBlog()
    {
        return view('show-blog');
    }
}
