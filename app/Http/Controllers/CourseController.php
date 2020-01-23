<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
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
        return view('pages.Course');
    }

    public function add()
    {
        return view('pages.Course');
    }

    public function delete()
    {
        return view('pages.Course');
    }

    public function edit()
    {
        return view('pages.Course');
    }

    public function update()
    {
        return view('pages.Course');
    }
}
