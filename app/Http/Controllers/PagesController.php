<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Request; nose paq es

class PagesController extends Controller
{
    /*public function home(){
		
		return view('welcome');
	}*/

	public function about(){
		
		return view('about');
	}

	public function contact(){
		
		return view('tickets.create');
	}
	public function about1(){
		
		return view('about1');
	}

	public function contact1(){
		
		return view('contact1');
	}
	public function home(){
		
		return view('home');
	}
	public function homes(){
		
		return view('homes');
	}
	public function homex(){
		
		return view('homex');
	}
}
