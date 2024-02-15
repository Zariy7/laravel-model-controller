<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index(){
        $movies_db = Movie::all();
        //dd($movies_db);
        return view('movies.index', compact('movies_db'));
    }
}
