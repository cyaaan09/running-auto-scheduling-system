<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

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
        $courses = Course::all();
        return view('pages.Course')->with("courses", $courses);
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
