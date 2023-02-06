<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\AdminHome;
use App\Models\Allservices;
use App\Models\Ambasder;
use App\Models\CompanyLogo;
use App\Models\Faq;
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
    //    $footerdetail=FooterDetail::first();
       $reviews=GoogleReview::all();
       $ambester=Ambasder::all();
       
        return view('front.index',compact('data','logos','indexcards','kitchengallery','bathroomgallery','reviews','ambester'));
    }



    public function HowItWorks(){
        $data=AdminHome::first(); 
        // $footerdetail=FooterDetail::first();
        return view('front.howitworks',compact('data'));
    }
public function Kitchen(){
    // $footerdetail=FooterDetail::first();
    $data=AdminHome::first(); 
        return view('front.kitchen',compact('data'));
    }
public function Washroom(){
    // $footerdetail=FooterDetail::first();
    $data=AdminHome::first(); 
        return view('front.washroom',compact('data'));
    }

    public function Gallery(){
        $data=AdminHome::first(); 
        // $footerdetail=FooterDetail::first();
        return view('front.gallery',compact('data'));
    }

    public function Design(){
        $data=AdminHome::first(); 
        // $footerdetail=FooterDetail::first();
        return view('front.design',compact('data'));
    }


        public function Allservices(){
            $data=AdminHome::first(); 
                // $footerdetail=FooterDetail::first();
                return view('front.allservices',compact('data'));
            }


            public function Remodeling(){
                // $footerdetail=FooterDetail::first();
                    return view('front.remodeling');
                }
    public function reno_exp()
    {
        // $footerdetail=FooterDetail::first();
        return view('front.renovation-experience');
    }
    public function Whychooseus(){
        $reviews=GoogleReview::all();
        // $footerdetail=FooterDetail::first();
return view('front.whychooseus',compact('reviews'));
    }

 public function People(){
        
        // $footerdetail=FooterDetail::first();
return view('front.people');
    }

    public function Businessoppertunities(){
        
        // $footerdetail=FooterDetail::first();
return view('front.businessoppertunities');
    }

public function enquiry()
{
    // $footerdetail=FooterDetail::first();
        return view('front.renovation-enquiry');
}

public function career()
{
    // $footerdetail=FooterDetail::first();
        return view('front.career-oppurtunies');
}

public function Commercialrenovation()
{
    // $footerdetail=FooterDetail::first();
    $reviews=GoogleReview::all();
        return view('front.commercialrenovation',compact('reviews'));
}


public function Aboutus()
{
    // $footerdetail=FooterDetail::first();
        return view('front.aboutus');
}


public function Openservice($name){

    $allservicedata=Allservices::where('service','=',$name)->get();
    // dd($allservicedata);
    $servicefaq=Faq::where('service','=',$name)->get();

    return view("front.opensingleservice",compact('allservicedata','servicefaq'));
}



}