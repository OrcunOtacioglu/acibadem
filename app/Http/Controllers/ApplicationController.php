<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function treatment()
    {
        return view('frontend.treatment');
    }

    public function whyUs()
    {
        return view('frontend.why-us');
    }

    public function getQuote()
    {
        return view('frontend.get-quote');
    }

    public function package($type)
    {
        return view('frontend.package', compact('type'));
    }
}
