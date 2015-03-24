<?php

namespace CachetHQ\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the website homepage to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the team page to the user.
     *
     * @return Response
     */
    public function team()
    {
        return view('team');
    }
}
