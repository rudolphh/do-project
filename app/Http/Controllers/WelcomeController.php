<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;


class WelcomeController extends Controller
{

	/************  Create Instance Object
	* @return void
	*/
    public function __construct(){

    	// whatever middleware is set to, it restricts these only for those users
		//this->middleware('guest');
    }

	/************  Show Welcome Page
	* @return Response
	*/
    public function index(){

    	if(Auth::check()){
    		return redirect('home');
    	}
    	return view('welcome');

    }

}
