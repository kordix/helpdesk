<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Channel;
use Auth;

class indexcontroller extends Controller
{
    public function index(Channel $channel)
    {
        // dd(Auth::user()->name);
        if ($channel->exists) {
            $tasks = $channel->tasks()->where('completed', 0)->orderBy('priority_id');
        } else {
            //$tasks = $channel->tasks()->latest();
            $tasks = Task::where('completed', 0)->orderBy('priority_id');
        }

        $tasks = $tasks->get();
        return view('layouts.index', compact('tasks'));
    }

    public function indexcomplete()
    {
        $tasks = Task::where('completed', 1)->orderBy('id')->get();
        return view('layouts.indexcom', compact('tasks'));
    }
}
