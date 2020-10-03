<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function gallery()
    {

       // return view ('assets.gallery');

        $gsData = DB::table('gallery')->get();
        return view ('assets.gallery', compact('gsData'));
    }



    public function contact(){
        return view ('assets.contact');
    }
}
