<?php

namespace App\Http\Controllers\Backend;

use Session;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Mail;
use App\Mail\ForgotPasswordMail;

class AuthController extends Controller
{
    public function login(Request $request)

    {

        // $password = "123456789";
        // $dd = Hash::make($password);
        // dd($dd);

        return view ('backend.auth.login');

    }

    public function forgot(Request $request)
    {
        return view ('backend.auth.forgot');
    }



    public function forgot_admin(Request $request)

    {
       $rendome_passwoed = rand(111111111,999999999);
       $user = User::where('email' , '=' , $request->email)->first();

          if(!empty($user))
          {
            $user->password = Hash::make($rendome_passwoed);
            $user->save();

            $user->password_rendome = $rendome_passwoed ;

           // Mail::to($user->email)->send(new ForgotPasswordMail($user));
            Mail::to($user->email)->send(new ForgotPasswordMail($user));


            return redirect()->back()->with('success' , 'Password successful send Your email box.Please check email box');

          }
          else
          {
            return redirect()->back()->with('error' , 'Email ID Not Found');

          }


    }

    public function login_admin(Request $request)
    {

        if(Auth::attempt(['email' => $request->email , 'password' => $request->password] , true))
        {
            if(!empty(Auth::user()->status))
            {
                // is the role 1 admin
                      if(Auth::user()->is_role == '1')
                      {
                          return redirect()->intended('admin/dashboard');
                      }
                     else
                      //if the role is not 1
                      {
                         return redirect('login')->with('error' , 'Not Admin!');

                      }
            }
            else
            {
                //back to the page login with success if the status 0
                $user_id = Auth::user()->id;
                Auth::logout();
                $user = User::find($user_id);
                return redirect('login')->with('success' , 'This Email is not verified yet!');
            }
        }
//error
        else
        {

        return redirect()->back()->with('error' , 'Please enter the correct credentials');

        }



    }
// logout start
    public function logout()
    {
        Auth::logout();
        return redirect(url('login'));
    }

//logout end


}
