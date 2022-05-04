<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;
use App\Movie;
class PageController extends Controller
{
    public function index() {
        $movies = Movie::all();
        // dd($movies);
        $data = [
            'movies' => $movies
        ];
        return view('index', $data);
    }
}
