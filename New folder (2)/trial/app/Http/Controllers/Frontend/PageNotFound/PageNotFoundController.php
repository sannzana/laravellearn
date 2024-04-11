<?php

namespace App\Http\Controllers\Frontend\PageNotFound;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageNotFoundController extends Controller
{
    public function index() 
    {
        return view('frontend.pages.page_not_found.index');
    }
}
