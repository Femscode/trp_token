<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    public function index()
    {

        return view('frontend.home');
       
    }
    public function connect_wallet()
    {
       
        $data['connected_address'] = Session::get('connected_address');
        
        return view('frontend.connect_wallet2', $data);
        return view('frontend.connect_wallet', $data);
        return view('frontend.oldwallet_connect',$data);
    }
    public function connect_wallet_address(Request $request) {
       
        $this->validate($request, [
            // 'type' => 'required',
            'address' => 'required',
           
           
        ]);
        $data = $request->all();
        $check = Wallet::where('address', $request->address)->where('type',$request->type)->first();
        if($check){
            Session::put('connected_address',$request->address);
            return response()->json([
                'status' => true,
                'message' => 'Wallet Already Connected'
            ]);
        }
      
        $wallet = Wallet::create(['type' => $request->type ?? "Unknown", 'address'=> $request->address ]);
        Session::put('connected_address',$request->address);
        return response()->json([
            'status' => true,
            'message' => 'Wallet Connected'
        ]);
        
    }
    public function contact()
    {
        return view('frontend.contact');
       
    }
    public function services()
    {
        return view('frontend.services');
       
    }
    public function Wallets()
    {
        $data['Wallets']  = Wallet::latest()->paginate(10);
        return view('frontend.Wallet',$data);
       
    }
    public function Walletdetails($id,$slug)
    {
        $data['Wallet'] = Wallet::find($id);
        return view('frontend.Walletdetails',$data);
       
    }
    public function savecontact(Request $request) {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);
        $data = $request->all();
        $contact = Contact::create($data);
        return true;
        
    }

        public function stakeTokens(Request $request)
    {
        dd($request->all());
        $request->validate([
            'address' => 'required|string',
            'amount' => 'required|numeric|min:0.1',
        ]);

        // Save staking data in the database
        $staking = new Wallet();
        $staking->wallet_address = $request->address;
        $staking->amount = $request->amount;
        $staking->save();

        return response()->json(['message' => 'Staking successful.'], 200);
    }

    public function downloadWhitepaper() {
        $filePath = public_path('assets/whitepaper.pdf'); // Adjust filename as needed

        $filePath = public_path('trp_token_files/public/whitepaper.pdf');
        // Check if file exists
        if (!file_exists($filePath)) {
            return response()->json(['error' => 'File not found.'], 404);
        }
    
        // Download the file
        return Response::download($filePath, 'trp-whitepaper.pdf', [
            'Content-Type' => 'application/pdf',
        ]);
    }
    
}
