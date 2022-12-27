<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('front.index');
    }
    public function HowItWorks(){
        return view('front.howitworks');
    }
public function Kitchen(){
        return view('front.kitchen');
    }
public function Washroom(){
    
        return view('front.washroom');
    }

    public function Gallery(){
    
        return view('front.gallery');
    }

    public function Design(){
    
        return view('front.design');
    }

}