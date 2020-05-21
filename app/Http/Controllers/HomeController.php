<?php


namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function showTest()
    {
        return view('test');
    }

    public function index()
    {
        return view('welcome');
    }

    public function contactus() {
        return view('contactus');
    }

    public function aboutus()
    {
        return view('aboutus');
    }
}
