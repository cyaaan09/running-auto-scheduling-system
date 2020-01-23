<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructorController extends Controller
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
        return view('pages.Instructor');
    }
    public function add()
    {
        return view('pages.Instructor');
    }

    public function delete()
    {
        return view('pages.Instructor');
    }

    public function edit()
    {
        return view('pages.Instructor');
    }

    public function update()
    {
        return view('pages.Instructor');
    }
}
