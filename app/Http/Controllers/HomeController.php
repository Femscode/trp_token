<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use App\Models\ComingSoon;
use App\Models\Contact;
use App\Models\MySession;
use App\Models\Notification;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }




    public function logout()
    {
        Auth::logout();
        // return Redirect::route('login');
        Session::flush();

        return Redirect::away('login');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {

        return redirect('/dashboard');
    }

    public function setpin(Request $request)
    {
        $this->validate($request, [
            'first' => 'required',
            'second' => 'required',
            'third' => 'required',
            'first' => 'required',
            'user_id' => 'required'
        ]);
        $pin = $request->first . $request->second . $request->third . $request->fourth;

        $hashed_pin = hash('sha256', $pin);

        $user = User::where('uuid', $request->user_id)->firstOrFail();
        $user->pin = $hashed_pin;
        $user->save();
        return true;
    }
    public function dashboard()
    {

        $data['user'] = $user = Auth::user();
        $data['allcontacts'] = Contact::all();
        $data['wallets'] = Wallet::latest()->get();
        $data['active'] = 'dashboard';
        return response()->view('dashboard.index', $data);
    }
    public function Wallets()
    {
        $data['user'] = $user = Auth::user();
        $data['allWallets'] = Wallet::get();
        $data['Wallets'] = Wallet::latest()->paginate(3);
        $data['active'] = 'dashboard';
        return response()->view('dashboard.Wallet', $data);
    }
    public function contact()
    {
        $data['user'] = $user = Auth::user();
        $data['active'] = 'dashboard';
        $data['allcontacts'] = Contact::get();
        $data['contacts'] = Contact::latest()->paginate(10);
        return response()->view('dashboard.contact', $data);
    }
  

    

    public function deleteWallet($id) {
        $Wallet = Wallet::find($id);
        $Wallet->delete();
        return redirect()->back()->with('message', 'Wallets deleted successfully!');
    }



    public function profile()
    {
        $data['user'] = Auth::user();
        $data['active'] = 'profile';
        return view('dashboard.profile', $data);
    }
 
    public function resend_verification()
    {
        $auth_user = Auth::user();
        $user = User::where('id', $auth_user->id)->first();
        if ($user->email_resend <= 3) {
            $user->email_resend += 1;
            $user->save();
            $user->sendEmailVerificationNotification();
            return redirect()->back()->with('message', 'Verification mail sent successfully!');
        } else {
            return redirect()->back()->with('message', 'Maximum amount of time to resend email reached!');
        }
    }
  
   
    public function updateprofile(Request $request)
    {

        $user = Auth::user();
        if ($request->image !== null) {
            $image = $request->file('image');
            $imageName = $image->hashName();
            $image->move(public_path('brand_images'), $imageName);
            $user->image = $imageName;
        }


        $user->name = $request->name;
        $user->phone = $request->phone;

        $user->save();
        return redirect()->back()->with('message', 'User Profile Updated Successfully!');
    }
}
