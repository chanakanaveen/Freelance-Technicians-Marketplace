<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;
use App\Models\VerificationToken;
use Illuminate\Support\Facades\DB;
use constGuards;
use constDefaults;
use Illuminate\Support\Facades\File;

class ClientController extends Controller
{
    //login
    public function login(Request $request){
        $data = [
            'pageTitle'=>'Client Login'
        ];
        return view('back.pages.client.auth.login',$data);
    }

    //register
    public function register(Request $request){
        $data = [
            'pageTitle'=>'Create Client Account'
        ];
        return view('back.pages.client.auth.register',$data);
    }

    //client home
    public function home(Request $request){
        $data = [
            'pageTitle'=>'Client Dashboard'
        ];
        return view('back.pages.client.home',$data);
    }

    //create seller account
    public function createClient(Request $request){
        //Validate clients Registration Form
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:clients',
            'password'=>'min:5|required_with:confirm_password|same:confirm_password',
            'confirm_password'=>'min:5'
        ]);

        $clients = new Client();
        $clients->name = $request->name;
        $clients->email = $request->email;
        $clients->password = Hash::make($request->password);
        $saved = $clients->save();

        if( $saved ){
            // return redirect()->route('seller.register-success');
            return redirect()->route('client.login')->with('success','Good!, Registation successful. Login with your credentials and complete setup your Client account.');
        }else{
            return redirect()->route('client.register')->with('fail','Something went wrong.');
        }
    }

    //login function
    public function loginHandler(Request $request){
        $fieldType = filter_var($request->login_id, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if( $fieldType == 'email' ){
            $request->validate([
                'login_id'=>'required|email|exists:clients,email',
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

        if( Auth::guard('client')->attempt($creds) ){


            if( !auth('client')->user()->verified ){
                return redirect()->route('client.client-details');
            }else{
                return redirect()->route('client.home');
            }
        }else{
            return redirect()->route('client.login')->withInput()->with('fail','Incorrect password.');
        }
    }

    //logout
    public function logoutHandler(Request $request){
        Auth::guard('client')->logout();
        return redirect()->route('client.login')->with('fail','You are logged out!');
    }

    //client details
    public function clientDetails(Request $request){
        $client = null;
        if( Auth::guard('client')->check() ){
            $client = Auth::guard('client')->user();
        }
        $provinces = DB::table('provinces')->get();
        $districts = DB::table('districts')->get();
        $cities = DB::table('cities')->get();
        //dd($client);
        $data = [
            'pageTitle'=>'Client Details',
            'client'=>$client,
            'provinces'=>$provinces,
            'districts'=>$districts,
            'cities'=>$cities
        ];
        return view('back.pages.client.client-details',$data);
    }

    //save client details
    public function saveClientDetails(Request $request){ //dd($request);
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'provinces'=>'required',
            'districts'=>'required',
            'cities'=>'required',
        ]);

        $client = Client::find(auth()->id()); //dd($request,$client);
        $client->name = $request->name;
        $client->phone = $request->phone;
        $client->address = $request->address;
        $client->provinces = $request->provinces;
        $client->districts = $request->districts;
        $client->cities = $request->cities;
        $client->verified = "1";

        $saved = $client->save();
        if( $saved ){
            return redirect()->route('client.home')->with('success','Client details updated successfully.');
        }else{
            return redirect()->route('client.client-details')->with('fail','Something went wrong.');
        }
    }

    //change profile picture
    public function changeProfilePicture(Request $request){


        $client = Client::findOrFail(auth()->id());
        $path = 'images/users/clients/';

        if($request->hasFile('clientProfilePictureFile')){
            $file = $request->file('clientProfilePictureFile');
            $old_picture = $client->getAttributes()['picture'];
            $file_path = $path.$old_picture;
            $filename = 'CLIENT_IMG_'.rand(2,1000).$client->id.time().uniqid().'.jpg';

            $upload = $file->move(public_path($path),$filename);
            if($upload){
                if( $old_picture != null && File::exists(public_path($path.$old_picture)) ){
                    File::delete(public_path($path.$old_picture));
                }
                $client->update(['picture'=>$filename]);
                return response()->json(['status'=>1,'msg'=>'Your profile picture has been successfully updated.']);
            }else{
                return response()->json(['status'=>0,'msg'=>'Something went wrong.']);
            }
        }

        // return redirect()->route('client.client-details')->with('success','Profile picture updated successfully');
    }

     //profile view
     public function profileView(Request $request){
        $client = null;
        if( Auth::guard('client')->check() ){
            $client = client::findOrFail(auth()->id());
        }
        $provinces = DB::table('provinces')->get();
        $districts = DB::table('districts')->get();
        $cities = DB::table('cities')->get();

        $data = [
            'pageTitle'=>'Client Profile',
            'client'=>$client,
            'provinces'=>$provinces,
            'districts'=>$districts,
            'cities'=>$cities
        ];

        return view('back.pages.client.profile', $data);
    }

     //update profile
     public function updateProfile(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'address' => 'required',
            'phone'=> 'required',
            'provinces' => 'required',
            'districts' => 'required',
            'cities' => 'required',
        ]);

        $client = Client::findOrFail(auth()->id());
        $client->name = $request->name;
        $client->email = $request->email;
        $client->username = $request->username;
        $client->address = $request->address;
        $client->phone = $request->phone;
        $client->provinces = $request->provinces;
        $client->districts = $request->districts;
        $client->cities = $request->cities;
        $saved = $client->save();

        if($saved){
            return redirect()->route('client.profile')->with('success','Profile updated successfully');
        }else{
            return redirect()->route('client.profile')->with('fail','Something went wrong.');
        }

    }
}
