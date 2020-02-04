<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use App\Room;

class HomeController extends Controller
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
        $hello = "Hello";
        $rooms = Room::all();
        foreach($rooms as $room){
            var_dump($room->room_type);
            die();
        }
        // var_dump($rooms); die();
        $process = new Process(['python', storage_path("app/ga/server.py"), $hello]);
        $process->setTimeout(0);
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        echo $process->getOutput();

        return view('pages.dashboard');
    }
}
