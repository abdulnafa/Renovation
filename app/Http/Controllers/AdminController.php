<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Admin;
use App\Models\CompanyLogo;
use Illuminate\Http\Request;
use App\Models\AdminHome;

class AdminController extends Controller
{
    public function Show(){
    //    dd(storage_path('app/public/dashboardpics/logos'));
        $data=AdminHome::all();
        $logos=CompanyLogo::all();
        // dd($data);
        return view('admindashboard.index',compact('data','logos'));
    }


    public function Sliderpicssave(Request $request){
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
        
        
       
       
        
        
       
   
        $data->save();
        return redirect()->back();
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
    return redirect('/admindashboard');

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
            return redirect('admindashboard');
            
            }else{
                return redirect('admindashboard');
            }

            
            
        }



    }


    public function Deletecompanylogo($id){
$data=CompanyLogo::find($id);

$folderimagepath=storage_path('app/public/dashboardpics/logos/').$data->logoimg;
$data->delete();
@unlink($folderimagepath);
return redirect('admindashboard');

    }

   
}