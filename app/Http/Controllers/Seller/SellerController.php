<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Seller;
use App\Models\VerificationToken;
use Illuminate\Support\Facades\DB;
use constGuards;
use constDefaults;
use Illuminate\Support\Facades\File;
// use Mberecall\Kropify\Kropify;
// use App\Models\Shop;

class SellerController extends Controller
{
    //login
    public function login(Request $request){
        $data = [
            'pageTitle'=>'Seller Login'
        ];
        return view('back.pages.seller.auth.login',$data);
    }

    //register
    public function register(Request $request){
        $data = [
            'pageTitle'=>'Create Seller Account'
        ];
        return view('back.pages.seller.auth.register',$data);
    }

    //seller home
    public function home(Request $request){
        $data = [
            'pageTitle'=>'Seller Dashboard'
        ];
        return view('back.pages.seller.home',$data);
    }

    public function registerSuccess(Request $request){
        return view('back.pages.seller.register-success');
    }

    //create seller account
    public function createSeller(Request $request){
        //Validate Seller Registration Form
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:sellers',
            'password'=>'min:5|required_with:confirm_password|same:confirm_password',
            'confirm_password'=>'min:5'
        ]);

        $seller = new Seller();
        $seller->name = $request->name;
        $seller->email = $request->email;
        $seller->password = Hash::make($request->password);
        $saved = $seller->save();

        if( $saved ){
        //    //Generate token
        //    $token = base64_encode(Str::random(64));

        //    VerificationToken::create([
        //       'user_type'=>'seller',
        //       'email'=>$request->email,
        //       'token'=>$token
        //    ]);

        //    $actionLink = route('seller.verify',['token'=>$token]);
        //    $data['action_link'] = $actionLink;
        //    $data['seller_name'] = $request->name;
        //    $data['seller_email'] = $request->email;

        //    //Send Activation link to this seller email
        //    $mail_body = view('email-templates.seller-verify-template',$data)->render();

        //    $mailConfig = array(
        //       'mail_from_email'=>env('EMAIL_FROM_ADDRESS'),
        //       'mail_from_name'=>env('EMAIL_FROM_NAME'),
        //       'mail_recipient_email'=>$request->email,
        //       'mail_recipient_name'=>$request->name,
        //       'mail_subject'=>'Verify Seller Account',
        //       'mail_body'=>$mail_body
        //    );

        //    if( sendEmail($mailConfig) ){
        //       return redirect()->route('seller.register-success');
        //    }else{
        //      return redirect()->route('seller.register')->with('fail','Something went wrong while sending verification link.');
        //    }
            // return redirect()->route('seller.register-success');
            return redirect()->route('seller.login')->with('success','Good!, Registation successful. Login with your credentials and complete setup your Technicians account.');
        }else{
            return redirect()->route('seller.register')->with('fail','Something went wrong.');
        }
    }

    //login function
    public function loginHandler(Request $request){
        $fieldType = filter_var($request->login_id, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if( $fieldType == 'email' ){
            $request->validate([
                'login_id'=>'required|email|exists:sellers,email',
                'password'=>'required|min:5|max:45'
            ],[
                'login_id.required'=>'Email or Username is required.',
                'login_id.email'=>'Invalid email address.',
                'login_id.exists'=>'Email is not exists in system.',
                'password.required'=>'Password is required'
            ]);
        }else{
            $request->validate([
                'login_id'=>'required|exists:sellers,username',
                'password'=>'required|min:5|max:45'
            ],[
                'login_id.required'=>'Email or Username is required.',
                'login_id.exists'=>'Username is not exists in system.',
                'password.required'=>'Password is required'
            ]);
        }

        $creds = array(
            $fieldType => $request->login_id,
            'password' => $request->password
        );

        if( Auth::guard('seller')->attempt($creds) ){
            //  return redirect()->route('seller.home');
            if( !auth('seller')->user()->verified ){
                auth('seller')->logout();
                return redirect()->route('seller.login')->with('fail','Your account is not verified. Check in your email and click on the link we had sent in order to verify your email for seller account.');
            }else{
                return redirect()->route('seller.home');
            }
        }else{
            return redirect()->route('seller.login')->withInput()->with('fail','Incorrect password.');
        }
    }

    //logout
    public function logoutHandler(Request $request){
        Auth::guard('seller')->logout();
        return redirect()->route('seller.login')->with('fail','You are logged out!');
    } 
}
