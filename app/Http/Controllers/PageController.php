<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }

    public function about()
    {

        return view('about');
    }

    public function contacts()
    {

        return view('contacts');
    }
}
