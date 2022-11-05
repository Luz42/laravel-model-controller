<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class MovieController extends Controller
{
    //all'interno del controller verranno abbinati e gestiti i dati e la pagina,
    //per essere poi associati ad una determinata rotta 

    public function index(){

        $movie = Movie::all();
        //dd($movie);
        return view('home', compact('movie'));
    }
}
