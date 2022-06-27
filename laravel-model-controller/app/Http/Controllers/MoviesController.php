<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;

class MoviesController extends Controller
{
    public function index(){
        $movies = Movies::limit(20)->get();
        dump($movies);

        return view('film');
    }
}
