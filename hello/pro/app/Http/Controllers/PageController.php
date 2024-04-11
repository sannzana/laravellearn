<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $upperGalleryImages = [
            'extra-left1.jpg', 'left1.jpg', 'left2.jpg', 'left3.jpg',
            'left4.jpg',
             'left5.jpg', 'left6.jpg', 'left7.jpg' ,'left8.jpg'
            , 'left10.jpg',// ... add all upper images
            'left4.jpg',
             'left5.jpg', 'left6.jpg', 'left7.jpg' ,'left8.jpg'
            , 'left10.jpg'//

        ];

        $imagel=['extra-right1.jpg'];
        $imager=['extra-left1.jpg'];

        $lowerGalleryImages = [
            'right10.jpg', 'right1.jpg', 'right2.jpg', 'right3.jpg'
            , 'right4.jpg'
            , 'right5.jpg', 'right6.jpg', 'right7.jpg', 'right8.jpg'
            ,'right10.jpg'// ... add all lower images
        ];

        return view('home', compact('upperGalleryImages',
            'lowerGalleryImages'));
    }


}
