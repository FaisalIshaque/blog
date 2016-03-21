<?php

namespace App;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
	protected $fillable =
	[
		'title', 
		'body', 
		'author', 
		'published_at'
	];
    
    protected $dates = ['published_at'];

    //set NameOfTheField Attribute

    public function setPublishedAtAttribute($date)
    {
    	$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    public function scopeUnPublished($query)
    {
    	$query->where('published_at','>', Carbon::now());
    }

    public function scopePublished($query)
    {
    	$query->where('published_at','<=', Carbon::now());
    }

}
