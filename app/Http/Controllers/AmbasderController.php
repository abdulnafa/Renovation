<?php

namespace App\Http\Controllers;

use App\Models\Ambasder;
use Illuminate\Http\Request;

class AmbasderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Ambasder::all();
        return view("admindashboard.ambasders",compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view("admindashboard.addambasder");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Ambasder();
        if($request->hasFile('ambasderimage')){
            $imagepath=time().$request->file('ambasderimage')->getClientOriginalName();
            $request->file('ambasderimage')->storeAs('public/dashboardpics/ambasders',$imagepath);
            $data->image=$imagepath;
            $data->save();
        }
        
        return redirect()->route('ambesders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ambasder  $ambasder
     * @return \Illuminate\Http\Response
     */
    public function show(Ambasder $ambasder,$id)
    {
        $data=Ambasder::find($id);
        $folderpath=storage_path('app/public/dashboardpics/ambasders/').$data->image;
        unlink($folderpath);
        $data->delete();
        return redirect()->route('ambesders.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ambasder  $ambasder
     * @return \Illuminate\Http\Response
     */
    public function edit(Ambasder $ambasder,$id)
    {
        $data=Ambasder::find($id);
        return view('admindashboard.addambasder',compact('data'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ambasder  $ambasder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ambasder $ambasder,$id)
    {
        $data=Ambasder::find($id);
        if($request->hasFile('ambasderimage')){
            $folderpath=storage_path('app/public/dashboardpics/ambasders/').$data->image;
            unlink($folderpath);
            $imagepath=time().$request->file('ambasderimage')->getClientOriginalName();
            $request->file('ambasderimage')->storeAs('public/dashboardpics/ambasders',$imagepath);
            $data->image=$imagepath;
            $data->save();
        }
        
        return redirect()->route('ambesders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ambasder  $ambasder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ambasder $ambasder)
    {
        //
    }
}
