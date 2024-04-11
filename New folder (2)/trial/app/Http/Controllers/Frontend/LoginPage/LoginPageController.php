<?php

namespace App\Http\Controllers\Frontend\LoginPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginPageController extends Controller
{
    public function loginPage() 
    {
        return view('frontend.pages.login_page.index');
    }
    
    public function registerPage() 
    {
        return view('frontend.pages.register_page.index');
    }
}
