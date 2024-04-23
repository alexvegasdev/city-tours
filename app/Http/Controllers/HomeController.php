<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Package;
use App\Models\Place;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $categories = Category::all();
        $packages = Package::all();
        $places = Place::all();
        
        return view('home', compact('categories','packages','places'));     
    }
}