<?php

namespace App\Http\Controllers;

use App\Models\GoogleReview;
use Illuminate\Http\Request;

class GoogleReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=GoogleReview::all();
        return view('admindashboard.googlereview',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admindashboard.addgooglereview');
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
        $data=new GoogleReview();
        if($request->hasFile('reviewimage')){
            $imagepath= time() . $request->file('reviewimage')->getClientOriginalName();
            $request->file('reviewimage')->storeAs('public/dashboardpics/reviews',$imagepath);
            $data->reviewimage=$imagepath;

        }
        $data->name=$request->name;
        $data->stars=$request->rating;
        $data->description=$request->description;
        $data->save();
        return redirect()->route('googlereviews.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GoogleReview  $googleReview
     * @return \Illuminate\Http\Response
     */
    public function show(GoogleReview $googleReview,$id)
    {
     $data=GoogleReview::find($id);
     $imagepath=storage_path('app/public/dashboardpics/reviews/').$data->reviewimage;
     unlink($imagepath);
     $data->delete();
     return redirect()->route('googlereviews.index');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GoogleReview  $googleReview
     * @return \Illuminate\Http\Response
     */
    public function edit(GoogleReview $googleReview,$id)
    {
       
        $data=GoogleReview::find($id);
        
        return view('admindashboard.addgooglereview',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GoogleReview  $googleReview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GoogleReview $googleReview,$id)
    {
        $data=GoogleReview::find($id);
      
        if($request->hasFile('reviewimage')){
            $folderimagepath=storage_path('app/public/dashboardpics/reviews/').$data->reviewimage;
                @unlink($folderimagepath);
            $imagepath= time() . $request->file('reviewimage')->getClientOriginalName();
            $request->file('reviewimage')->storeAs('public/dashboardpics/reviews',$imagepath);
            $data->reviewimage=$imagepath;

        }
        $data->name=$request->name;
        $data->description=$request->description;
        $data->stars=$request->rating;
        $data->save();
        return redirect()->route('googlereviews.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GoogleReview  $googleReview
     * @return \Illuminate\Http\Response
     */
    public function destroy(GoogleReview $googleReview)
    {
        //
    }
}
