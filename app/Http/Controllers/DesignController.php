<?php

namespace App\Http\Controllers;

use App\Models\Design;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas=Design::all();
        return view('admindashboard.design',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admindashboard.adddesign');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $data=new Design();
        if($request->hasFile('designimage')){
            $imagepath=time().$request->file('designimage')->getClientOriginalName();
            $request->file('designimage')->storeAs('public/dashboardpics/designs',$imagepath);
          
           $data->designimage=$imagepath;
        }
        $data->servicename=$request->designservice;
        $data->designname=$request->designname;
        $data->tag1=$request->tag1;
        $data->tag2=$request->tag2;
        $data->tag3=$request->tag3;
        $data->save();
        return redirect()->Route('designs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Design  $design
     * @return \Illuminate\Http\Response
     */
    public function show(Design $design)
    {
        $data=Design::find($design->id);
        $folderimagepath=storage_path('app/public/dashboardpics/designs/').$data->designimage;
        @unlink($folderimagepath);
        $data->delete();
        return redirect()->Route('designs.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Design  $design
     * @return \Illuminate\Http\Response
     */
    public function edit(Design $design)
    {
        
        return view('admindashboard.adddesign',compact('design'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Design  $design
     * @return \Illuminate\Http\Response
     */
    public function update(Design $design,Request $request)
    {
       
       
        $data=Design::find($design->id);
        if($request->hasFile('designimage')){
            $folderimagepath=storage_path('app/public/dashboardpics/designs/').$data->designimage;
            @unlink($folderimagepath);


            $imagepath=time().$request->file('designimage')->getClientOriginalName();
            $request->file('designimage')->storeAs('public/dashboardpics/designs',$imagepath);
          
           $data->designimage=$imagepath;
        }
        $data->servicename=$request->designservice;
        $data->designname=$request->designname;
        $data->tag1=$request->tag1;
        $data->tag2=$request->tag2;
        $data->tag3=$request->tag3;
        $data->save();
        return redirect()->Route('designs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Design  $design
     * @return \Illuminate\Http\Response
     */
    public function destroy(Design $design)
    {
        

    }
}
