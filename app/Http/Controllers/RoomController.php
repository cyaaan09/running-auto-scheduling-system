<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
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
        return view('pages.Room');
    }
    public function add()
    {
        return view('pages.Room');
    }

    public function delete()
    {
        return view('pages.Room');
    }

    public function edit()
    {
        return view('pages.Room');
    }

    public function update()
    {
        return view('pages.Room');
    }
}
