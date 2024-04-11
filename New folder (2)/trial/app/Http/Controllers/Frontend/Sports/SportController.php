<?php

namespace App\Http\Controllers\Frontend\Sports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SportController extends Controller
{
    public function index() 
    {
        return view('frontend.pages.sport.index');
    }

    public function details() 
    {
        return view('frontend.pages.sport.details');
    }

    public function ticket() 
    {
        return view('frontend.pages.sport.ticket');
    }

    public function checkout() 
    {
        return view('frontend.pages.sport.checkout');
    }
}
