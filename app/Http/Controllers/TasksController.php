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
    	$task = task::all(); 

    	//return ($task);
    }
    //the 'task' in blue is the model "task", we are fetching all data from there into $task
    //then return that data as is.
}
