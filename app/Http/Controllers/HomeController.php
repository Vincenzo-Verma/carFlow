<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Car;

class HomeController extends Controller
{
    function index()
    {
        $cars = Car::get();


        //    return view('home.index', [ 'name' => 'John Doe', 'age' => 25 ]); 
        // return View::make('home.index');
        return view('home.index');
    }
}
