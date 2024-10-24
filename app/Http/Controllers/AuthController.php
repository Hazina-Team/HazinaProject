<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;
use App\Models\User; 
use Str;
use App\Mail\ForgotPasswordMail;
use Mail;

class AuthController extends Controller
{
    public function login()
    {
     // Login logic here
         // dd(Hash::make(123456));
         if(!empty(Auth::check()))
         {
             if(Auth::user() -> user_type == 1)
             {
                 return redirect('admin/dashboard');
             }
             else if(Auth::user() -> user_type == 2)
             {
                 return redirect('mashirika/dashboard');
             }
             else if(Auth::user() -> user_type == 3)
             {
                 return redirect('mali/dashboard');
             }
         }
     return view('auth.login');
    }
 
    public function AuthLogin(Request $request)
    {
         // dd($request->all());
         $remember = !empty($request->remember) ? true : false;
         if(Auth::attempt(['email' => $request->email, 'password' => $request->password],  $remember))
         {
             if(Auth::user() -> user_type == 1)
             {
                 return redirect('admin/dashboard');
             }
             else if(Auth::user() -> user_type == 2)
             {
                 return redirect('mashirika/dashboard');
             }
             else if(Auth::user() -> user_type == 3)
             {
                 return redirect('mali/dashboard');
             }
             
         }
         else {
             return redirect()->back()->with('errors','please enter currect email and password');
         }
     
    }
    public function forgotPassword(){
        return view('auth.forgot');
    }

    public function PostForgotPassword(Request $request) {
      
        $user = User::getEmailSingle($request->email);
     
        if(!empty($user)) {
            $user->remember_token = Str::random(30);
            $user->save();
            Mail::to($user->email)->send(new ForgotPasswordMail($user));
    
            return redirect()->back()->with('success', "Tafadhali Angalia Kwenye Email Yako na Reset Password Yako");
        } else {
            return redirect()->back()->with('error', "Samahani Email Yako Haitambuliki.");
        }
    }

    public function reset($remember_token)
     {
        $user = User::getTokenSingle($remember_token);
        if(!empty($user))
        {
            $data['user'] = $user;
            return view('auth.reset', $data);
        } else {
            abort(404);
        }
    
    }

    public function PostReset($token, Request $request)
     {
        if($request->password == $request->cpassword)
        {
            $user = User::getTokenSingle($token);
            $user->password = Hash::make($request->password);
            $user->remember_token = Str::random(30);
            $user->save();
            return redirect('login')->with('success', "Umefanikiwa ingiza tarifa zako");
        } else {
            return redirect()->back()->with('error', "Samahani Tafadhali Hakikisha Yassword Ya Ywanza Ya Ya Pili Ipo Sawa.");   
        }
    }
   
        
 
    public function logout() 
    {
        Auth::logout();
        return redirect(url(''));
    }
}
