<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Schedule;




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

        $schedules = Schedule::all();
        
        return view('pages.dashboard', compact(['schedules']));

    }
}
