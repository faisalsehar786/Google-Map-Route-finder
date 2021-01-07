<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use CH;
class Profile extends Controller
{
   function __construct()
{
$this->middleware('auth');
}

public function profile()
{
 



   // CH::validateSubscription();





   $profiledata=User::find(Auth::user()->id);
   
   

  
	return view('profile')->with('profile', $profiledata);
	
}
 

    public function updateProfile(Request $request){
    


    $validatedData = $request->validate([
    'email' => 'required'

   ]);


   

 $upadteProfile=User::find(Auth::user()->id);

    

  $upadteProfile->update([
    "name" =>$request->fullname,
    "username" =>$request->username,
    "company" => $request->companyname,
    "email" => $request->email,
    "contact" =>$request->contact,
    "contactotp" =>$request->contactopt,
    "city" =>$request->city,
    "country" =>$request->country,
    "address" => $request->address,
    
]);


   return redirect('/profile');

    }

}