<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeetingController extends Controller
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
        return view('pages.Meeting');
    }
    public function add()
    {
        return view('pages.Meeting');
    }

    public function delete()
    {
        return view('pages.Meeting');
    }

    public function edit()
    {
        return view('pages.Meeting');
    }

    public function update()
    {
        return view('pages.Meeting');
    }
}
