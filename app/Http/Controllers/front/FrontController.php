<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\AdminHome;
use App\Models\CompanyLogo;
use App\Models\FooterDetail;
use App\Models\Gallery;
use App\Models\HomePlaneCard;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $data=AdminHome::first(); 
       $logos=CompanyLogo::all();
       $indexcards=HomePlaneCard::first();
       $kitchengallery=Gallery::where('service','=','kitchen')->get();
       $bathroomgallery=Gallery::where('service','=','bathroom')->get();
       $footerdetail=FooterDetail::first();
       
        return view('front.index',compact('data','logos','indexcards','kitchengallery','bathroomgallery','footerdetail'));
    }
    public function HowItWorks(){
        $data=AdminHome::first(); 
        $footerdetail=FooterDetail::first();
        return view('front.howitworks',compact('data','footerdetail'));
    }
public function Kitchen(){
    $footerdetail=FooterDetail::first();
        return view('front.kitchen',compact('footerdetail'));
    }
public function Washroom(){
    $footerdetail=FooterDetail::first();
        return view('front.washroom',compact('footerdetail'));
    }

    public function Gallery(){
        $data=AdminHome::first(); 
        $footerdetail=FooterDetail::first();
        return view('front.gallery',compact('data','footerdetail'));
    }

    public function Design(){
        $data=AdminHome::first(); 
        $footerdetail=FooterDetail::first();
        return view('front.design',compact('data','footerdetail'));
    }


        public function Allservices(){
               
                $footerdetail=FooterDetail::first();
                return view('front.allservices',compact('footerdetail'));
            }


    

}