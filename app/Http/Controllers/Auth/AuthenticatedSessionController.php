<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\FooterDetail;
use Mail;
use App\Mail\SendMail;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // $footerdetail=FooterDetail::first();
        return view('auth.login',compact('footerdetail'));
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();
      

        $request->session()->regenerate();
      
        if(Auth::user()->roll_as=="admin"){
            return redirect('/admin');
            // $testMailData = [
            //     'title' => 'Test Email From Renovation.com',
            //     'body' => 'Thanks for Reaching to our  website'
            // ];
    
            // Mail::to($request->email)->send(new SendMail($testMailData));
        }else{
            return redirect('/');
            // $testMailData = [
            //     'title' => 'Test Email From Renovation.com',
            //     'body' => 'Thanks for Reaching to our  website'
            // ];
    
            // Mail::to($request->email)->send(new SendMail($testMailData));
        }

        // return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
