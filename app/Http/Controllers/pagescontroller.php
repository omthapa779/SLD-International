<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    public function about(){
        return view('about');
    }
    public function countries(){
        return view('countries');
    }
    public function services(){
        return view('services');
    }
    public function contact(){
        return view('contact');
    }
}
