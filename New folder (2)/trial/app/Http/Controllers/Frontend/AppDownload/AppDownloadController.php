<?php

namespace App\Http\Controllers\Frontend\AppDownload;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppDownloadController extends Controller
{
    public function index() 
    {
        return view('frontend.pages.app_download.index');
    }
}
