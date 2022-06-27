<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;

class FilmController extends Controller
{
    public function index(){
        $movies=Film::limit(20)->get();
        dump($movies);
        return view('film');
    }
}
