<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InstructorSubject;
use Illuminate\Support\Facades\DB;
use App\Instructor;
use App\Course;
use App\Section;
use App\Subject;

class InstructorSubjectController extends Controller
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


    public function get()
    {
        // $rooms = DB::table('rooms')
        //     ->leftjoin('types', 'rooms.type_id', '=', 'types.id')->get();
        // $InstructorSubjects = InstructorSubject::leftjoin('types', 'rooms.type_id', '=', 'types.id')
        // ->select('rooms.id as room_id','types.name as type_name', 'rooms.created_at', 'rooms.updated_at', 'rooms.seating_capacity as capacity')
        // ->get();
        // dd($rooms);
        // $types = Type::all();
        // return view('pages.room')->with(['rooms', $rooms, 'types', $types]);
        $InstructorSubjects = DB::table('instructor_subjects')
        					->leftjoin('courses', 'instructor_subjects.course_id', '=', 'courses.id')
        					->leftjoin('sections', 'instructor_subjects.section_id', '=', 'sections.id')
        					->leftjoin('instructors', 'instructor_subjects.instructor_id', '=', 'instructors.id')
        					->leftjoin('subject_details', 'instructor_subjects.subject_details_id', '=', 'subject_details.id')
        					->leftjoin('subjects', 'subject_details.subject_id', '=', 'subjects.id')
        					->leftjoin('types', 'subject_details.type_id', '=', 'types.id')
        					->select('instructor_subjects.id as id', 'courses.name as course_name', 'sections.name as section_name', 'instructors.name as instructor_name', 'subjects.name as sub_name', 'types.name as type_name')
        					->get();

        					// dd($InstructorSubjects);

        $instructors = Instructor::all();
        $courses = Course::all();
        $sections = Section::all();
        // $subjects = Subject::all();
        $subjects = DB::table('subject_details')
        			->leftjoin('subjects', 'subjects.id', '=', 'subject_details.subject_id')
        			->leftjoin('types', 'types.id', '=', 'subject_details.type_id')
        			->select('subjects.id as id', 'subject_details.id as sub_id', 'subjects.name as name', 'types.name as type_name')
        			->get();
       	$sub_select = Subject::all(); 
        			// dd($subjects);

        return view('pages.InstructorSubject', compact(['InstructorSubjects', 'instructors', 'courses', 'sections', 'subjects']));
        // return view('pages.InstructorSubject')->with('InstructorSubjects', $InstructorSubjects);
    }

    public function new()
    {
        return view('pages.InstructorSubject');
    }

    public function show()
    {
        return view('pages.InstructorSubject');
    }

    public function post(Request $request)
    {
        $InstructorSubject = new InstructorSubject;
        $InstructorSubject->instructor_id = $request->input('instructor');
        $InstructorSubject->course_id = $request->input('course');
        $InstructorSubject->section_id = $request->input('section');
        $InstructorSubject->subject_details_id = $request->input('subject');
        $InstructorSubject->save();
        return redirect('/instructorsubject');
    }

    public function edit()
    {
        return view('pages.InstructorSubject');
    }

    public function put()
    {
        return view('pages.InstructorSubject');
    }

    public function delete()
    {
        return view('pages.InstructorSubject');
    }

    
}

