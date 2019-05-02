<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function packages(){
        return view('pages.packages');
    }

    public function flights(){
        return view('pages.flights');
    }

    public function about(){
        return view('pages.about');
    }

    


}
