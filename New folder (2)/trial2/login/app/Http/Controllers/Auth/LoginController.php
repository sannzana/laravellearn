<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home'; // redirect after login

    // public function __construct()
    // {
    //     // Only apply 'guest' middleware to the 'showLoginForm' method.
    //     // This means only guests can view the login form.
    //     $this->middleware('guest', ['only' => ['showLoginForm']]);
    
    //     // Apply the 'auth' middleware to the 'logout' method.
    //     // This means only authenticated users can log out.
    //     $this->middleware('auth', ['only' => ['logout']]);
    // }
    

    public function showLoginForm()
    {
        return view('layout.login'); // make sure to create this view
    }

    // You can add other methods as needed, for example, a custom validation method.
}
