<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Auth;
use Session;
use App\Package;
use App\Userpackage;
class PaymentController extends Controller
{
function __construct()
{
$this->middleware('auth');
}
public function payment()
{
	


$allackages=Package::all();
return view('payment1')->with('packages',$allackages);


}


public function subscribebyPaypalcheck(Request $request){
 
$checkexist=Userpackage::where('user_id',Auth::user()->id)->get();
$alreadyPackage=Package::find($request->plain_id);

session()->put('user_idpay',Auth::user()->id);
session()->put('package_id_idpay',$alreadyPackage->id);


 if(count( $checkexist)>0){




$customalert='hai già un abbonamento normale vuoi aggiornare o cambiare';




}else {

$customalert='attualmente disponi di un pacchetto di base predefinito di importazione 25 indirizzi per richiesta.sei sicuro di voler aggiornare o cambiare ..!';

	
}


return json_encode(['price'=>$alreadyPackage->price,'status'=>$customalert,'alreadyPackage'=>$alreadyPackage,'pack_id'=>session('package_id_idpay')]);


}

public function Paypalpaymentdone($tid){
$allackages=Package::all();
$package_id=session('package_id_idpay');
 $checkexist=Userpackage::where('user_id',Auth::user()->id)->get();

 if(count( $checkexist)>0){
    $updatesubscribtion=Userpackage::where('user_id',Auth::user()->id);

	$updatesubscribtion->update(["user_id"=>Auth::user()->id,"package_id"=>$package_id,"charge_id"=>$tid]);

 }else{
	Userpackage::create(["user_id"=>Auth::user()->id,"package_id"=>$package_id,"charge_id"=>$tid]);

 }

 return view('payment1')->with('packages',$allackages)->with('strip_success','Paypal Payment Done Abbonamento completato con successo');

}



public function submitPayment(Request $request)
{


 $checkexist=Userpackage::where('user_id',Auth::user()->id)->get();
$alreadyPackage=Package::find($request->plain);
 if(count( $checkexist)>0){




$customalert='Hai già una pianura '.$alreadyPackage->name.'Limite di per richiesta'.$alreadyPackage->limit;


$allackages=Package::all();
   return view('payment1')->with('packages',$allackages)->with('strip_error',$customalert)->with('update_subscription','yes');

      
    	 }else{

       

 $allackages=Package::all();
$validatedData = $request->validate([
'plain' => 'required|max:25'

]);

Stripe::setApiKey(env('STRIPE_SECRET'));
if (!isset($request->stripeToken)){

return view('payment1')->with('packages',$allackages)->with('strip_error','Stripe Il token di pagamento non è impostato. Prova Agian');

}else {
	$charge=Charge::create([
	"amount" =>$request->price*100,
	"currency" => env('STRIPE_CURRENCY'),
	"source"   =>$request->stripeToken, // obtained with Stripe.js
	"description" => Auth::user()->email,
	"receipt_email"=>Auth::user()->email
	]);
	if (isset($charge)){
//dd($charge);


	Userpackage::create(["user_id"=>Auth::user()->id,"package_id"=>$request->plain,"charge_id"=>$charge->id]);

session()->put("receipt_url",$charge->receipt_url);
return view('payment1')->with('packages',$allackages)->with('strip_success','Stripe Payment Done Abbonamento completato con successo');
	
	
	}else {
	
return view('payment1')->with('packages',$allackages)->with('strip_error','Errore di pagamento a strisce Prova Agian');
		
	}
	
}


    	 }
			
}


public function updatesubscribtion(Request $request){


 $allackages=Package::all();
$validatedData = $request->validate([
'plain' => 'required|max:25'

]);

Stripe::setApiKey(env('STRIPE_SECRET'));
if (!isset($request->stripeToken)){

return view('payment1')->with('packages',$allackages)->with('strip_error','Stripe Payment Token is Not Set Please Try Agian');

}else {
	$charge=Charge::create([
	"amount" =>$request->price*100,
	"currency" => env('STRIPE_CURRENCY'),
	"source"   =>$request->stripeToken, // obtained with Stripe.js
	"description" => Auth::user()->email,
	"receipt_email"=>Auth::user()->email
	]);
	if (isset($charge)){
//dd($charge);


	$updatesubscribtion=Userpackage::where('user_id',Auth::user()->id);

	$updatesubscribtion->update(["user_id"=>Auth::user()->id,"package_id"=>$request->plain,"charge_id"=>$charge->id]);

session()->put("receipt_url",$charge->receipt_url);
return view('payment1')->with('packages',$allackages)->with('strip_success','Stripe Pagamento e abbonamento aggiornati con successo');
	
	
	}else {
	
return view('payment1')->with('packages',$allackages)->with('strip_error','Stripe Errore di pagamento Prova Agian');
		
	}
	
}




}

public function getPlainPrice(Request $request){
$package=Package::find($request->plain_id);
	return json_encode(['packagedetail'=>$package]);
}
	}