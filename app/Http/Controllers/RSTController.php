<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RSTController extends Controller
{
    public function index(){
        return view ('assets.home');
    }

    public function services(){
        return view ('assets.services');
    }

    public function about(){
        return view ('assets.about');
    }

    public function gallery(){
        return view ('assets.gallery');
    }

    public function contact(){
        return view ('assets.contact');
    }
}
