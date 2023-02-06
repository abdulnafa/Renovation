<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Admin;
use App\Models\CompanyLogo;
use Illuminate\Http\Request;
use App\Models\AdminHome;
use App\Models\Allservices;
use App\Models\Faq;
use App\Models\FooterDetail;
use App\Models\Gallery;
use App\Models\HomePlaneCard;
use App\Models\Service;

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
    public function myregister()
    {
        return view('front.myregister');
    }


    public function Allservices($name){
        $servicesname=Service::all();
        $allservicesdata=Allservices::where("service","=",$name)->get();
        $faq=Faq::all();
        
       
return view('admindashboard.allservices',compact('servicesname','name','allservicesdata','faq'));
    }



    public function Addallservices(Request $request){


       

if(Allservices::where('service','=',$request->service)->first()){
    $data=Allservices::where('service','=',$request->service)->first();
        if($request->hasFile('headtopimgonefile')){
            $folderimagepath=storage_path('app/public/dashboardpics/Allservices/').Allservices::where('service','=',$request->service)->first()->headtopimgonefile;
            @unlink($folderimagepath);
            $imagepath=time().$request->file('headtopimgonefile')->getClientOriginalName();
            $request->file('headtopimgonefile')->storeAs('public/dashboardpics/Allservices',$imagepath);
            $data->headtopimgonefile=$imagepath;
        
        }
        if($request->hasFile('headtopimgtwofile')){
            $folderimagepath=storage_path('app/public/dashboardpics/Allservices/').Allservices::where('service','=',$request->service)->first()->headtopimgtwofile;
            @unlink($folderimagepath);
            $imagepath=time().$request->file('headtopimgtwofile')->getClientOriginalName();
            $request->file('headtopimgtwofile')->storeAs('public/dashboardpics/Allservices',$imagepath);
            $data->headtopimgtwofile=$imagepath;
        
        }




        if($request->hasFile('headtopimgthreefile')){
            $folderimagepath=storage_path('app/public/dashboardpics/Allservices/').Allservices::where('service','=',$request->service)->first()->headtopimgthreefile;
            @unlink($folderimagepath);
            $imagepath=time().$request->file('headtopimgthreefile')->getClientOriginalName();
            $request->file('headtopimgthreefile')->storeAs('public/dashboardpics/Allservices',$imagepath);
            $data->headtopimgthreefile=$imagepath;
        
        }


        if($request->hasFile('servicecardonefile')){
            $folderimagepath=storage_path('app/public/dashboardpics/Allservices/').Allservices::where('service','=',$request->service)->first()->servicecardonefile;
            @unlink($folderimagepath);
            $imagepath=time().$request->file('servicecardonefile')->getClientOriginalName();
            $request->file('servicecardonefile')->storeAs('public/dashboardpics/Allservices',$imagepath);
            $data->servicecardonefile=$imagepath;
        
        }


        if($request->hasFile('servicecardtwofile')){
            $folderimagepath=storage_path('app/public/dashboardpics/Allservices/').Allservices::where('service','=',$request->service)->first()->servicecardtwofile;
            @unlink($folderimagepath);
            $imagepath=time().$request->file('servicecardtwofile')->getClientOriginalName();
            $request->file('servicecardtwofile')->storeAs('public/dashboardpics/Allservices',$imagepath);
            $data->servicecardtwofile=$imagepath;
        
        }



        if($request->hasFile('servicecardthreefile')){
            $folderimagepath=storage_path('app/public/dashboardpics/Allservices/').Allservices::where('service','=',$request->service)->first()->servicecardthreefile;
            @unlink($folderimagepath);
            $imagepath=time().$request->file('servicecardthreefile')->getClientOriginalName();
            $request->file('servicecardthreefile')->storeAs('public/dashboardpics/Allservices',$imagepath);
            $data->servicecardthreefile=$imagepath;
        
        }

        $data->service=$request->service;
        $data->headtoptitle=$request->headtoptitle;
        $data->headtopparagraph=$request->headtopparagraph;
        $data->headtoplist1=$request->headtoplist1;
        $data->headtoplist2=$request->headtoplist2;
        $data->headtoplist3=$request->headtoplist3;
        $data->servicecardonetitle=$request->servicecardonetitle;
        $data->servicecardonecontent=$request->servicecardonecontent;
        $data->servicecardtwotitle=$request->servicecardtwotitle;
        $data->servicecardtwocontent=$request->servicecardtwocontent;
        $data->servicecardthreetitle=$request->servicecardthreetitle;
        $data->servicecardthreecontent=$request->servicecardthreecontent;

        $data->save();

        return redirect("/services");





    }else{
        $data=new Allservices();
        if($request->hasFile('headtopimgonefile')){
        $imagepath=time().$request->file('headtopimgonefile')->getClientOriginalName();
        $request->file('headtopimgonefile')->storeAs('public/dashboardpics/Allservices',$imagepath);
        $data->headtopimgonefile=$imagepath;
        }

        if($request->hasFile('headtopimgtwofile')){
           
            $imagepath=time().$request->file('headtopimgtwofile')->getClientOriginalName();
            $request->file('headtopimgtwofile')->storeAs('public/dashboardpics/Allservices',$imagepath);
            $data->headtopimgtwofile=$imagepath;
        
        }




        if($request->hasFile('headtopimgthreefile')){
            
            $imagepath=time().$request->file('headtopimgthreefile')->getClientOriginalName();
            $request->file('headtopimgthreefile')->storeAs('public/dashboardpics/Allservices',$imagepath);
            $data->headtopimgthreefile=$imagepath;
        
        }


        if($request->hasFile('servicecardonefile')){
           
            $imagepath=time().$request->file('servicecardonefile')->getClientOriginalName();
            $request->file('servicecardonefile')->storeAs('public/dashboardpics/Allservices',$imagepath);
            $data->servicecardonefile=$imagepath;
        
        }


        if($request->hasFile('servicecardtwofile')){
           
            $imagepath=time().$request->file('servicecardtwofile')->getClientOriginalName();
            $request->file('servicecardtwofile')->storeAs('public/dashboardpics/Allservices',$imagepath);
            $data->servicecardtwofile=$imagepath;
        
        }



        if($request->hasFile('servicecardthreefile')){
           
            $imagepath=time().$request->file('servicecardthreefile')->getClientOriginalName();
            $request->file('servicecardthreefile')->storeAs('public/dashboardpics/Allservices',$imagepath);
            $data->servicecardthreefile=$imagepath;
        
        }

        $data->service=$request->service;
        $data->headtoptitle=$request->headtoptitle;
        $data->headtopparagraph=$request->headtopparagraph;
        $data->headtoplist1=$request->headtoplist1;
        $data->headtoplist2=$request->headtoplist2;
        $data->headtoplist3=$request->headtoplist3;
        $data->servicecardonetitle=$request->servicecardonetitle;
        $data->servicecardonecontent=$request->servicecardonecontent;
        $data->servicecardtwotitle=$request->servicecardtwotitle;
        $data->servicecardtwocontent=$request->servicecardtwocontent;
        $data->servicecardthreetitle=$request->servicecardthreetitle;
        $data->servicecardthreecontent=$request->servicecardthreecontent;

        $data->save();

        return redirect("/services");












    }





       
    }


    public function Addquestion(Request $request){
$data=new Faq();
$data->question=$request->question;
$data->answer=$request->answer;
$data->service=$request->service;
$data->save();
return redirect()->route('allservices',$request->service);
    }
public function Deletefaq($id,$name){
    Faq::where('id','=',$id)->delete();
    return redirect()->route('allservices',$name);
}





   
}