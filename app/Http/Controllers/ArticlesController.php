<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ArticleRequest;

use Carbon\Carbon;

use App\article;

use App\tag;

use Auth;

use Flash;

//use App\Http\Requests\Request;

//use Request; //used for facade


class ArticlesController extends Controller
{
    //authentican user with following

    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
        //$this->middleware('auth', ['only' => 'create']);
    }

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


    public function show(article $article)
    {

    	return view('articles.show', compact('article'));

    }

    public function create()
    {
        $tags = tag::lists('name', 'id');



    	return view('articles.create', compact('tags'));

    }

      

   public function store(ArticleRequest $request)
    {

        //dd($request->get('tag_list[]'));
       

        $this->createArticle($request);

        //\Session::flash('flash_message', 'Your atricle has been created and saved');

        //\Session::flash('flash_message_important', true);

        //Session facade -> flash function -> ('flash id-tag', ' message to appear in flash');
        //now we need our view to display the flash above.

        flash('Your Article Has Been Created And Saved');

        //flash()->success('Your Article Has Been Created And Saved');
        //flash()->overlay('Your Article Has Been Created And Saved', 'Good Job');


        return redirect('articles');

    }
    

   /*   public function store(ArticleRequest $request)
    {
        article::create(Request::all());

        return redirect('articles');

    }*/
    

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

    public function edit(article $article)
    {
        $tags = tag::lists('name', 'id');
       
        return view('articles.edit', compact('article', 'tags'));
    }


    public function update(article $article, ArticleRequest $request)
    {
        $article->update($request->all());
       
        //$article->tags()->sync($request->input('tag_list'));

        $this->syncTag($article, $request->input('tag_list'));

        flash('Your Article Has Been Updated And Saved');

        return redirect('articles');
    }

    private function syncTag(article $article, array $tags)
    {
        $article->tags()->sync($tags);
    }

    private function createArticle(ArticleRequest $request)
    {
        //$article = new article($request->all());

        //Auth::user()->articles()->save($article);

        $article = Auth::user()->articles()->create($request->all());
        //the line above can be used to replace the two lines above. just remember tinker Create and Save methods.

        $article->tags()->attach($request->input('tag_list'));

        return ($article);
    }

}
