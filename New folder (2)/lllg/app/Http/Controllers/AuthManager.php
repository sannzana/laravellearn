<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    function login(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('layout.login');
    }

    function loginpost(Request $request)
    {
$request->validate(
    [
        'email'=>'required',
        'password'=>'required'
    ]
    );
    $cr=$request->only('email','password');

        if (Auth::attempt($cr)) {
            return redirect()->intended(route('dashboard'))->with("success", "Login is complete");
        }


        return redirect(route('login'))->with("error","Login details are not valid" );



    }



    function registrationpost(Request $request): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required|email|unique:users',
                'password'=>'required'
            ]
            );


            $data['name']=$request->name;
            $data['email']=$request->email;
            $data['password']=Hash::make($request->password);
             $user=User::create($data);

             if(!$user)
             {
                 return redirect(route('registration'))->with("error","details are not valid" );
             }
             return redirect(route('login'))->with("success","Login is complete" );
    }

    function registration(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('layout.registration');
    }


    function logout(): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }

    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('dashboard')->with('success', 'User deleted successfully.');
    }


    public function edit($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    // Method to handle the update request
    public function update(Request $request, $id): \Illuminate\Http\RedirectResponse
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('dashboard')->with('success', 'User updated successfully.');
    }
}
