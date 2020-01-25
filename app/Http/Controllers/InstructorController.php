<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instructor;

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
        $instructors = Instructor::all();
        return view('pages.instructor')->with("instructors", $instructors);
    }
    public function add(Request $request)
    {
        $instructor = new Instructor;
        $instructor->name = $request->input('instructor_name');
        $instructor->save();
        return redirect('/instructor');
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
