<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ArticleRequest;

use Carbon\Carbon;

use App\article;

//use App\Http\Requests\Request;

//use Request; //used for facade


class ArticlesController extends Controller
{
    //
    public function index()
    {
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

      
      public function store(ArticleRequest $request)
    {
        article::create(Request::all());

        return redirect('articles');

    }

  /*  public function store(CreateArticleRequest $request)
    {
        article::create($request->all());

        return redirect('articles');

    }
    */


    /* public function store(Request $request)
    {
        $this->validate($request, [

            'title' => 'required|min:5',

            'body'  => 'required',

            'published_at' => 'required|date',

            'author' => 'required'

            ]);

        article::create($request->all());

        return redirect('articles');

    }*/

    public function edit($id)
    {
        $article = article::findOrFail($id);

        return view('articles/edit', compact('article'));
    }


    public function update($id, ArticleRequest $request)
    {
        $article = article::findOrFail($id);

        $article->update($request->all());

        return redirect('articles');
    }

}
