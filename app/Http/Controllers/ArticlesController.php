<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;

use Carbon\Carbon;

use App\article;

use Request;

class ArticlesController extends Controller
{
    //
    public function index()
    {
    	$articles = article::latest()->get();

    	//$articles = article::order_by('published_at', 'desc')->get(); ********* above query re-written in longer format.


    	//return ($article);
    	return view('articles.articles', compact('articles'));
    }
    //the 'article' in blue is the model "article", we are fetching all data from there into $articles
    //then return that data as is.

    public function show($id)
    {
    	$articles = article::findOrFail($id);

    	//return $article;

    	return view('articles.show', compact('articles'));

    }

    public function create()
    {

    	return view('articles.create');
    }

    public function store()
    {
    	$input = Request::all();

    	$input['[published_at'] = Carbon::now();

    	article::create($input);

    	return redirect('articles');
    }
}
