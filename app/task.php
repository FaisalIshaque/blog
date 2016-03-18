<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    protected $fillable = 
    [
    	'task_name',
    	'task_dscp',
    	'assigned_to'
    ];
}
