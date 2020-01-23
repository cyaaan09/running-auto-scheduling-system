<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
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
        return view('pages.Schedule');
    }
    public function add()
    {
        return view('pages.Schedule');
    }

    public function delete()
    {
        return view('pages.Schedule');
    }

    public function edit()
    {
        return view('pages.Schedule');
    }

    public function update()
    {
        return view('pages.Schedule');
    }
}
