<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home.home');
    }




    public function about()
    {
        return view('frontend.pages.about');
    }

    public function course()
    {
        return view('frontend.pages.courses');
    }

    public function gallery()
    {
        return view('frontend.pages.gallery');
    }


    public function contact()
    {
        return view('frontend.pages.contact');
    }
}
