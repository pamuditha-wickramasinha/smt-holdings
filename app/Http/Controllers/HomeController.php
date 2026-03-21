<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Display the home page.
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Display the projects page.
     */
    public function projects()
    {
        return view('projects');
    }
}
