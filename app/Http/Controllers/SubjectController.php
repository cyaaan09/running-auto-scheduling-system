<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('pages.Subject');
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
