<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
	//Passing a variable to the view
    public function index()
    {
    	$name = 'Hello <span style="color: red;">World</span>';		
		return view('welcome')->with('name',$name);
    }
    /*
    styling is applied to $name to show how unescaped data can affect the view in form of
    css, js or coming from DB. see welcome.blade.php for understanding


    
     public function index()
    {
    	$varname = 'Hello World';
    	return view('welcome')->with('name',$varname);
    }

     $varname -> variable defined in the controller
     'name'	-> variable sent to the view, should be same in the view
    

    //1-Passing an array to the view
     public function about()
    {
    	return view('about')->with([
    		'first'  => 'Hello',
    		'second' => 'World',
            'third'  => 'There'
    		]);
    }

    //passing array is 'key1' => 'value', 'key2' => 'value' so on and so forth.
    //'key' translates into variable name in the view, so it should be the same in controller and view.


*/
    //2-Passing an array to the view
    public function about()
    {
		$data = [];								 //define array
		$data['first']  = 'Hello';				 //index-1
		$data['third']  = 'There';               //index-2
        $data['second'] = 'World';				 //index-3

		return view('pages.about', $data);
    }

   /* //3-Passing an array to the view
     public function about()
     {
        $first  = 'Hello';
        $second = 'World';
        $third  = 'There';

        return view('pages.about', compact('first', 'third', 'second'));
     }*/
     //the function 'compact' will take separate variables and convert them
     //into an associative array and pass it to a view

     public function contact()
     {

        $footer = 'Hey Im The Footer Of The Contact Page';
        return view('pages.contact')->with('footer', $footer);
     }

     public function home()
     {
        $colors = [
            'Red', 'Black', 'White', 'Black'
        ];
        return view('pages.home', compact('colors'));
    }
	//Passing an array to home view
}
