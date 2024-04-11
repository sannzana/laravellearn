<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            // Updated password validation rule:
            'password' => [
                'required',
                'string',
                'min:8', // minimum 8 characters
                'confirmed',
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain a special character
            ],
            'mobile_number' => 'required|string|max:15',
            'gender' => 'required|string|in:male,female,other',
            'image' => 'nullable|image',
        ]);
        

        $user = User::create([
            'name' => $request->full_name,
            'email' => $request->email,
            // 'password' => Hash::make($request->password),
            'password' => $request->password,
            'mobile_number' => $request->mobile_number,
            'gender' => $request->gender,
            // 'image' => $request->image, // Handle file upload below
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $filename = $user->id . '_' . time() . '.' . $request->image->getClientOriginalExtension();
            $path = $request->image->storeAs('images', $filename, 'public');
            $user->image = $path;
            $user->save();
        }

        // Log the user in or redirect to login page
        // auth()->login($user); // Optional: login the user directly
        return redirect()->route('login')->with('success', 'Registration successful.');
    }

    public function showRegistrationForm()
    {
        return view('layout.register');
    }
}
