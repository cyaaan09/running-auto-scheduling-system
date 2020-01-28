<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Type;
use App\Room;

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
    public function get()
    {
        // $rooms = DB::table('rooms')
        //     ->leftjoin('types', 'rooms.type_id', '=', 'types.id')->get();
        $rooms = Room::leftjoin('types', 'rooms.type_id', '=', 'types.id')
        ->select('rooms.id as room_id','types.name as type_name', 'rooms.created_at', 'rooms.updated_at', 'rooms.seating_capacity as capacity')
        ->get();
        // dd($rooms);
        $types = Type::all();
        // return view('pages.room')->with(['rooms', $rooms, 'types', $types]);
        return view('pages.room', compact(['rooms', 'types']));
    }

    public function new()
    {
        return view('pages.Room');
    }

    public function show()
    {
        return view('pages.Room');
    }

    public function post()
    {
        return view('pages.Room');
    }

    public function edit()
    {
        return view('pages.Room');
    }

    public function put()
    {
        return view('pages.Room');
    }

    public function delete()
    {
        return view('pages.Room');
    }

    
}
