<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function test(){
        return view('test');
    }
    public function gallery(){
        return view('gallery');
    }
    public function digital(){
        return view('digital');
    }
    public function large(){
        return view('large');
    }
    public function offsetPrinting(){
        return view('offset');
    }
    public function services(){
        return view('service');
    }
    public function aboutUs(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function client(){
        return view('client');
    }
}
