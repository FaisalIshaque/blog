<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\task;

class TasksController extends Controller
{
    //
     public function index()
    {
    	$tasks = task::all(); 

    	//return ($task);

    	return view('tasks.tasks', compact('tasks'));
    }
    //the 'task' in blue is the model "task", we are fetching all data from there into $task
    //then return that data as is.

    public function show($id)
    {
    	$tasks = task::findOrFail($id);

    	return view('tasks.show', compact('tasks'));
    }
}
