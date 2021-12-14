<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{

   function index(Request $request,Donation $donation)
   {
        $donation->name=$request->name;
        $donation->lastname=$request->lastname;
        $donation->amount=$request->amount;
        $donation->message=$request->message;
        $donation->save();
       return view('donation.index',compact('donation'));
   }

}
