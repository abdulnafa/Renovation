<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\AdminHome;
use App\Models\Ambasder;
use App\Models\CompanyLogo;
use App\Models\FooterDetail;
use App\Models\Gallery;
use App\Models\GoogleReview;
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
       $reviews=GoogleReview::all();
       $ambester=Ambasder::all();
       
        return view('front.index',compact('data','logos','indexcards','kitchengallery','bathroomgallery','footerdetail','reviews','ambester'));
    }
    public function HowItWorks(){
        $data=AdminHome::first(); 
        $footerdetail=FooterDetail::first();
        return view('front.howitworks',compact('data','footerdetail'));
    }
public function Kitchen(){
    $footerdetail=FooterDetail::first();
    $data=AdminHome::first(); 
        return view('front.kitchen',compact('footerdetail','data'));
    }
public function Washroom(){
    $footerdetail=FooterDetail::first();
    $data=AdminHome::first(); 
        return view('front.washroom',compact('footerdetail','data'));
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
            $data=AdminHome::first(); 
                $footerdetail=FooterDetail::first();
                return view('front.allservices',compact('footerdetail','data'));
            }


            public function Remodeling(){
                
                    return view('front.remodeling');
                }
    public function reno_exp()
    {
        return view('front.renovation-experience');
    }

}