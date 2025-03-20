<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    function index() {
    //    return view('home.index', [ 'name' => 'John Doe', 'age' => 25 ]); 
    // return View::make('home.index');
    return view('home.index');
    }
}
