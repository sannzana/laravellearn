<?php

namespace App\Http\Controllers\Frontend\Movies;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index() 
    {
        return view('frontend.pages.movie.index');
    }

    public function details()
    {
        return view('frontend.pages.movie.details');
    }

    public function ticketPlan()
    {
        return view('frontend.pages.movie.ticket-plan');
    }

    public function seatPlan()
    {
        return view('frontend.pages.movie.seat-plan');
    }

    public function checkout()
    {
        return view('frontend.pages.movie.checkout');
    }

    public function food()
    {
        return view('frontend.pages.movie.food');
    }
}
