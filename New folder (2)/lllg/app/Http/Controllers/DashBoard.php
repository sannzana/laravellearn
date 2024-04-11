<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashBoard extends Controller
{
    public function  view()
    {
$users=User::all();
$data=compact('users');
return view('dashboard')->with($data);

    }

}
