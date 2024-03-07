<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    //     public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        return view('front.home');
    }

    public function about()
    {
        return view('front.about-us');
    }

    public function service()
    {
        return view('front.service');
    }

    public function serviceDetails()
    {
        return view('front.service-details');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function blog()
    {
        return view('front.blog');
    }

    public function blogDetails()
    {
        return view('front.blog-details');
    }

    public function team()
    {
        return view('front.team');
    }

    public function teamDetails()
    {
        return view('front.team-details');
    }

    public function pricing()
    {
        return view('front.pricing');
    }

    public function book()
    {
        return view('front.book');
    }
}
