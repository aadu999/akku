<?php

namespace Akku\Http\Controllers;

use Akku\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    /**
     * Show the configure dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function configure()
    {
        return view('configure');
    }


}
