<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Mail;
use App\Mail\SendMail;

class GoogleLoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirect()
    {
       
        return Socialite::driver('google')->redirect();
    }
        
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function callback()
    {
       
      
            $user = Socialite::driver('google')->user();
   
            // $finduser = User::where('google_id', $user->id)->first();
            $finduser = User::where('email', $user->email)->first();
           
       
            if ( $finduser ) {
      
                Auth::login($finduser);
                $testMailData = [
                    'title' => 'Test Email From Renovation.com',
                    'body' => 'Thanks for Reaching to our  website'
                ];
        
                Mail::to($user->email)->send(new SendMail($testMailData));
      
                return redirect()->intended('/');
       
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => 'dummypass'// you can change auto generate password here and send it via email but you need to add checking that the user need to change the password for security reasons
                ]);

               

                $testMailData = [
                    'title' => 'Test Email From Renovation.com',
                    'body' => 'Thanks for Reaching to our  website'
                ];
        
                Mail::to($user->email)->send(new SendMail($testMailData));
      
                Auth::login($newUser);
      
                return redirect()->intended('/');

               
            }
      
        
    }
}