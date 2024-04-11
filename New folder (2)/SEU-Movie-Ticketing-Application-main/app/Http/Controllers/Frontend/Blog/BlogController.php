<?php

namespace App\Http\Controllers\Frontend\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() 
    {
        return view('frontend.pages.blog.index');
    }

    public function details() 
    {
        return view('frontend.pages.blog.details');
    }
}
