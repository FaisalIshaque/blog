<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\article;

class ArticlesController extends Controller
{
    //
    public function index()
    {
    	$article = article::all();

    	//return ($article);
    	return view('pages.articles', compact('article'));
    }
    //the 'article' in blue is the model "article", we are fetching all data from there into $article
    //then return that data as is.

    public function show($id)
    {
    	$article = article::findOrFail($id);

    	//return $article;

    	return view('pages.show', compact('article'));

    }
}
