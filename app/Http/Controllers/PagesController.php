<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function welcome(){

        $tasks = ['Minum','Makan','Tidur','Coding','Ibadah'];
        return view('welcome', ['tasks' => $tasks]);
    }

    function contact(){

        return view('contact');
    }
    function about(){

        return view('about');
    }
    
}
