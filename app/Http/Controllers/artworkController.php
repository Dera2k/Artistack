<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class artworkController extends Controller
{
    public function index(){
        return view('pages.artworks');
    }
}
