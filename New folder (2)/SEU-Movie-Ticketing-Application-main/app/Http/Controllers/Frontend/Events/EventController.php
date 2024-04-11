<?php

namespace App\Http\Controllers\Frontend\Events;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() 
    {
        return view('frontend.pages.event.index');
    }

    public function details() 
    {
        return view('frontend.pages.event.details');
    }

    public function speaker() 
    {
        return view('frontend.pages.event.speaker');
    }

    public function ticket() 
    {
        return view('frontend.pages.event.ticket');
    }

    public function checkout() 
    {
        return view('frontend.pages.event.checkout');
    }
}
