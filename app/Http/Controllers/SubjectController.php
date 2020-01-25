<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class SubjectController extends Controller
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
        $subjects = subject::all();
        return view('pages.subject')->with("subjects", $subjects);
    }
    public function add()
    {
        return view('pages.Subject');
    }

    public function delete()
    {
        return view('pages.Subject');
    }

    public function edit()
    {
        return view('pages.Subject');
    }

    public function update()
    {
        return view('pages.Subject');
    }
}
