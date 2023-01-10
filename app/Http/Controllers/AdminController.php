<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Admin;
use App\Models\CompanyLogo;
use Illuminate\Http\Request;
use App\Models\AdminHome;
use App\Models\FooterDetail;
use App\Models\Gallery;
use App\Models\HomePlaneCard;

class AdminController extends Controller
{
    public function Show(){
   
        
        $data=AdminHome::all();
        $logos=CompanyLogo::all();
        $planecards=HomePlaneCard::all();
        return view('admindashboard.index',compact('data','logos','planecards'));
    }


    public function Sliderpicssave(Request $request){

        if(AdminHome::first()){
        $data=AdminHome::first();
        if($request->hasFile('firstslider')){
            $slider1 = time().$request->file('firstslider')->getClientOriginalName();
      $request->file('firstslider')->storeAs('public/dashboardpics/slider/',$slider1);
      $data->slider1 = $slider1;
        }
        if($request->hasFile('secondslider')){
$slider2 = time().$request->file('secondslider')->getClientOriginalName();
$request->file('secondslider')->storeAs('public/dashboardpics/slider/',$slider2);
$data->slider2 = $slider2;

        }
        if($request->hasFile('thirdslider')){
        $slider3 = time().$request->file('thirdslider')->getClientOriginalName();
        $request->file('thirdslider')->storeAs('public/dashboardpics/slider/',$slider3);
        $data->slider3 = $slider3;
        }
        $data->slider1title1=$request->slider1heading1;
        $data->slider1title2=$request->slider1heading2;
        $data->slider2title1=$request->slider2heading1;
        $data->slider2title2=$request->slider2heading2;
        $data->slider3title1=$request->slider3heading1;
        $data->slider3title2=$request->slider3heading2;

        $data->save();
        return redirect()->back();
    }else{
        $data=new AdminHome();
        if($request->hasFile('firstslider')){
            $slider1 = time().$request->file('firstslider')->getClientOriginalName();
      $request->file('firstslider')->storeAs('public/dashboardpics/slider/',$slider1);
      $data->slider1 = $slider1;
        }
        if($request->hasFile('secondslider')){
$slider2 = time().$request->file('secondslider')->getClientOriginalName();
$request->file('secondslider')->storeAs('public/dashboardpics/slider/',$slider2);
$data->slider2 = $slider2;

        }
        if($request->hasFile('thirdslider')){
        $slider3 = time().$request->file('thirdslider')->getClientOriginalName();
        $request->file('thirdslider')->storeAs('public/dashboardpics/slider/',$slider3);
        $data->slider3 = $slider3;
        }

        $data->slider1title1=$request->slider1heading1;
        $data->slider1title2=$request->slider1heading2;
        $data->slider2title1=$request->slider2heading1;
        $data->slider2title2=$request->slider2heading2;
        $data->slider3title1=$request->slider3heading1;
        $data->slider3title2=$request->slider3heading2;
        $data->save();
        return redirect()->back();

    }
    }

    public function ShowCompanyLog($id=null){
       
        if($id!=null){
            $data=CompanyLogo::find($id);
             return view('admindashboard.addlogo',compact('data'));
        }else{
            return view('admindashboard.addlogo');
        }
       
    }
    public function Savecompanylogoimage(Request $request,$id=null){
        // dd($request);
       
        if($id==null){
           
            $data=new CompanyLogo;
if($request->hasFile('companylogo')){
    $path=time().$request->file('companylogo')->getClientOriginalName();
    
    $request->file('companylogo')->storeAs('public/dashboardpics/logos',$path);
    $data->logoimg=$path;

    $data->save();
    return redirect('/admin');

}
        }else{
            if($request->hasFile('companylogo')){
                $data=CompanyLogo::find($id);
                $folderimagepath=storage_path('app/public/dashboardpics/logos/').$data->logoimg;

                @unlink($folderimagepath);
              
                $path=time().$request->file('companylogo')->getClientOriginalName();
                $request->file('companylogo')->storeAs('public/dashboardpics/logos',$path);
                $data->logoimg=$path;
                $data->save();
            return redirect('/admin');
            
            }else{
                return redirect('/admin');
            }

            
            
        }



    }


    public function Deletecompanylogo($id){
$data=CompanyLogo::find($id);

$folderimagepath=storage_path('app/public/dashboardpics/logos/').$data->logoimg;
$data->delete();
@unlink($folderimagepath);
return redirect('/admin');

    }




    public function Saveplanecard(Request $request){
        if(!HomePlaneCard::first()){
$data=new HomePlaneCard();
if($request->hasFile('cardonefile')){
    // $folderimagepath=storage_path('app/public/dashboardpics/cards/').HomePlaneCard::first()->cardoneimg;
    // @unlink($folderimagepath);
    $imagepath=time().$request->file('cardonefile')->getClientOriginalName();
    $request->file('cardonefile')->storeAs('public/dashboardpics/cards',$imagepath);
    $data->cardoneimg=$imagepath;

}
if($request->hasFile('cardtwofile')){
    // $folderimagepath=storage_path('app/public/dashboardpics/cards/').HomePlaneCard::first()->cardtwoimg;
    // @unlink($folderimagepath);
    $imagepath=time().$request->file('cardtwofile')->getClientOriginalName();
    $request->file('cardtwofile')->storeAs('public/dashboardpics/cards',$imagepath);
    $data->cardtwoimg=$imagepath;

}

if($request->hasFile('cardthreefile')){
    // $folderimagepath=storage_path('app/public/dashboardpics/cards/').HomePlaneCard::first()->cardthreeimg;
    // @unlink($folderimagepath);
    $imagepath=time().$request->file('cardthreefile')->getClientOriginalName();
    $request->file('cardthreefile')->storeAs('public/dashboardpics/cards',$imagepath);
    $data->cardthreeimg=$imagepath;

}
$data->cardonetitle=$request->cardonetitle;
$data->cardtwotitle=$request->cardtwotitle;
$data->cardthreetitle=$request->cardthreetitle;
$data->cardonecontent=$request->cardonecontent;
$data->cardtwocontent=$request->cardtwocontent;
$data->cardthreecontent=$request->cardthreecontent;

$data->save();
return redirect()->back();

        }else{

            $data=HomePlaneCard::first();
            if($request->hasFile('cardonefile')){
                $folderimagepath=storage_path('app/public/dashboardpics/cards/').HomePlaneCard::first()->cardoneimg;
                @unlink($folderimagepath);
                $imagepath=time().$request->file('cardonefile')->getClientOriginalName();
                $request->file('cardonefile')->storeAs('public/dashboardpics/cards',$imagepath);
                $data->cardoneimg=$imagepath;
            
            }
            if($request->hasFile('cardtwofile')){
                $folderimagepath=storage_path('app/public/dashboardpics/cards/').HomePlaneCard::first()->cardtwoimg;
                @unlink($folderimagepath);
                $imagepath=time().$request->file('cardtwofile')->getClientOriginalName();
                $request->file('cardtwofile')->storeAs('public/dashboardpics/cards',$imagepath);
                $data->cardtwoimg=$imagepath;
            
            }
            
            if($request->hasFile('cardthreefile')){
                $folderimagepath=storage_path('app/public/dashboardpics/cards/').HomePlaneCard::first()->cardthreeimg;
                @unlink($folderimagepath);
                $imagepath=time().$request->file('cardthreefile')->getClientOriginalName();
                $request->file('cardthreefile')->storeAs('public/dashboardpics/cards',$imagepath);
                $data->cardthreeimg=$imagepath;
            
            }
            $data->cardonetitle=$request->cardonetitle;
            $data->cardtwotitle=$request->cardtwotitle;
            $data->cardthreetitle=$request->cardthreetitle;
            $data->cardonecontent=$request->cardonecontent;
            $data->cardtwocontent=$request->cardtwocontent;
            $data->cardthreecontent=$request->cardthreecontent;
            
            $data->save();
            return redirect()->back();

        }

    }



    public function Showadmingallerypage(){
        $gallerydata=Gallery::all();
return view('admindashboard.gallery',compact('gallerydata'));
    }

    public function Savegalleryrecord(Request $request){


        
//         $mydata=$request->all();

//         foreach($mydata as $objdata){
//             $data=new Gallery();
// $data->service=$objdata['service'];
// $imagepath=time().$objdata['image'];
// $objdata['image']->storeAs('public/dashboardpics/gallery',$imagepath);                
// $data->galleryimage=$imagepath;
//   $data->save();
//         }
       

if($request->hasFile('galleryimagefile')){

    $data=new Gallery();
    
    $imagepath=time().$request->file('galleryimagefile')->getClientOriginalName();
    $request->file('galleryimagefile')->storeAs('public/dashboardpics/gallery',$imagepath);                
    $data->galleryimage=$imagepath;
    $data->service=$request->service;
      $data->save();

      return $data;




    return "true";
}else{
    return "false";
}


      
        

       
        
    }


    public function Deletegallaryimage($id){
$data=Gallery::find($id);
$folderimagepath=storage_path('app/public/dashboardpics/gallery/').Gallery::find($id)->galleryimage;
                @unlink($folderimagepath);
$data->delete();
return redirect()->back();
    }

    public function Adminfooterdetail(){
        $data=FooterDetail::first();
        return view('admindashboard.footer',compact('data'));
    }

    public function Footerdetail(Request $request){
        if(FooterDetail::first()){
            $data=FooterDetail::first();

            $data->facebook=$request->facebook;
            $data->twitter=$request->twitter;
            $data->google=$request->google;
            $data->instagram=$request->instagram;
            $data->linkedin=$request->linkedin;
            $data->github=$request->github;
            $data->address=$request->address;
            $data->mail=$request->mail;
            $data->number=$request->number;
            $data->ptcl=$request->ptcl;
            
            $data->save();
            return redirect()->back();
        }else{

            $data=new FooterDetail();

            $data->facebook=$request->facebook;
            $data->twitter=$request->twitter;
            $data->google=$request->google;
            $data->instagram=$request->instagram;
            $data->linkedin=$request->linkedin;
            $data->github=$request->github;
            $data->address=$request->address;
            $data->mail=$request->mail;
            $data->number=$request->number;
            $data->ptcl=$request->ptcl;
            
            $data->save();
            return redirect()->back();

        }



    }
   
}