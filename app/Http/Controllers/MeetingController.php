<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MeetingTime;
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
        $meeting_times = MeetingTime::all();
        return view('pages.Meeting')->with("meeting_times", $meeting_times);
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
