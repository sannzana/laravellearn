<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
    public function index() 
    {
        if(Auth::check())
        {
            if(Auth::user()->user_type == 1) {
                return view('backend.dashboard');
            } else {
                return view('frontend.pages.home.home');
            }
        } else {
            return view('frontend.pages.home.home');
        }
    }
}
