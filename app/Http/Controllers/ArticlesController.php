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
    	//$articles = article::latest('published_at')->get();
        //to get all articles

        //$articles = article::latest('published_at')->where('published_at','<=', Carbon::now())->get();
        //to display articles whose publish date is not in future i.e its it less than carbon::now()

        $articles = article::latest('published_at')->Published()->get();

        //$articles = article::latest('published_at')->UnPublished()->get();

    	return view('articles.articles', compact('articles'));
    }
        //the 'article' in blue is the model "article", we are fetching all data from there into $articles
        //then return that data as is.

    public function show($id)
    {
    	$articles = article::findOrFail($id);

    	return view('articles.show', compact('articles'));

    }

    public function create()
    {

    	return view('articles.create');

    }

    public function store()
    {

    	article::create(Request::all());

    	return redirect('articles');

    }
}
