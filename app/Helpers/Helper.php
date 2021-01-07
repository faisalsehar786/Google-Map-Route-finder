<?php
 
/**
 * Custom Helper Function
 */


 namespace App\Helpers;
 use Auth;
 use App\Userpackage;
 use DB;
 use URL;
 use SimpleCurl;
class Helper
{
   
   


        public static function checklogedinSubscription(){

       $userSubscriptiondata= DB::table('userpackages')->join('packages', 'userpackages.package_id', '=', 'packages.id')->where('userpackages.user_id',Auth::id())->first();
            $subscriptionexpire;
            if ($userSubscriptiondata!=null) {
            $timestemp=$userSubscriptiondata->updated_at;
             
            $membershipEnd=date("y-m-d",strtotime(date("y-m-d",strtotime($timestemp))."+ ".$userSubscriptiondata->days." day" ));
          
              if (date("y-m-d")<$membershipEnd) {
                    $subscriptionexpire="hai Currentally ".$userSubscriptiondata->name." Importazione dell'abbonamento".$userSubscriptiondata->limit."indirizzo per richiesta ..!";
              
              }else {

                   $subscriptionexpire="hai Currentally ".$userSubscriptiondata->name." Importazione dell'abbonamento".$userSubscriptiondata->limit."indirizzo per richiesta Ma il tuo abbonamento è stato Expier, per favore aggiornalo";
                
              }
               }else{
                $subscriptionexpire="disponi di 25 indirizzi di importazione di 25 indirizzi per richiesta di abbonamento normale. L'abbonamento è a vita";

               }


               return $subscriptionexpire;

         }
   
   public static function validateSubscription($session){
        $limt=25;
       if (Auth::check()) {


        $userSubscriptiondata= DB::table('userpackages')->join('packages', 'userpackages.package_id', '=', 'packages.id')->where('userpackages.user_id',Auth::id())->first();

       

        if ($session!=null) {

           $uniquearray=array_unique($session);
          
           $removeEmpty=array_filter($uniquearray);

           $count=count($removeEmpty);

           if ($userSubscriptiondata!=null) {
              $timestemp=$userSubscriptiondata->updated_at;
             
            $membershipEnd=date("y-m-d",strtotime(date("y-m-d",strtotime($timestemp))."+ ".$userSubscriptiondata->days." day" ));
          
              if (date("y-m-d")<$membershipEnd) {
                  $limt=$userSubscriptiondata->limit;
                 session()->forget('upgradesubs');
              }else {

                  session()->put('upgradesubs','show');
                      session()->forget('addMarkerModalLocations');

           session()->forget('downloadSessionMake');
            session()->forget('noresultFoundAddress');
         
             
                 $limt=25;

                
              }  
              
            
           }else {
              $limt=25;
             
           }

        

        if ($count>$limt) {

           session()->put('havapackage','show');

           session()->forget('addMarkerModalLocations');

           session()->forget('downloadSessionMake');
            session()->forget('noresultFoundAddress');
            
           

          } else {


            session()->forget('showSubscriptionAlert');
            session()->forget('havapackage');

          return $removeEmpty;
            
          }


      }

//dd($userSubscriptiondata);
         // die;
        }else{

        if ($session!=null) {

           $uniquearray=array_unique($session);
          
           $removeEmpty=array_filter($uniquearray);

           $count=count($removeEmpty);



        if ($count>$limt) {

     

                                                
         session()->put('showSubscriptionAlert','show');
         session()->forget('addMarkerModalLocations');
         session()->forget('downloadSessionMake');
        session()->forget('noresultFoundAddress');
      
      

        }else {

          session()->forget('showSubscriptionAlert');

          return $removeEmpty;
          
        }

        }
  

 
       }


     }






        public static function checklogedinSubscriptionDownlaodfile(){

       $userSubscriptiondata= DB::table('userpackages')->join('packages', 'userpackages.package_id', '=', 'packages.id')->where('userpackages.user_id',Auth::id())->first();
            $subscriptiondatacheck;
            if ($userSubscriptiondata!=null) {
            $timestemp=$userSubscriptiondata->updated_at;
             
            $membershipEnd=date("y-m-d",strtotime(date("y-m-d",strtotime($timestemp))."+ ".$userSubscriptiondata->days." day" ));
          
              if (date("y-m-d")<$membershipEnd) {
                      $subscriptiondatacheck=['logedin'=>'no','subscription'=>1];
              
              }else {

                      $subscriptiondatacheck= ['logedin'=>'yes','subscription'=>0];
                
              }
               }else{
                   $subscriptiondatacheck=['logedin'=>'no','subscription'=>0];

               }

               return  $subscriptiondatacheck;
              

         }



             public  static function puttlocationGetoutPutForxl($location,$orderid,$fullname,$comments){


               $cleanStrAddress = preg_replace('/[^A-Za-z0-9 ]/', '', $location);
        $data_location = "https://maps.google.com/maps/api/geocode/json?address=".urlencode(utf8_encode($cleanStrAddress ))."&key=".config('googlemaps.key')."&sensor=true";
    


 

                  $data = SimpleCurl::get($data_location)->getResponseAsJson();
                 

                 if ($data->status=='ZERO_RESULTS' || $data->status=='REQUEST_DENIED') {

                     session()->push('noresultFoundAddress', $location);

                     session()->forget('addMarkerModalLocations');

                   
                 }else {


                   $lat = $data->results[0]->geometry->location->lat;
               $lng = $data->results[0]->geometry->location->lng;

           
                if ( $cleanStrAddress != "" && $lat != 0 && $lng != 0) {


                    $datapush = array(
                        "address" => trim(strtolower($cleanStrAddress)),
                        "latitude" => $lat,
                        "longitude" => $lng,
                        "orderId"=>$orderid,
                        "customerfullname"=>$fullname,
                        "comments"=>$comments,
                    );
                  
                    session()->push('downloadSessionMake', $datapush);
                  }

                   
                 }
        
               }




               public static function unique_array($my_array, $key) { 
    
               $out = array();
             foreach (array_reverse($my_array) as $row) {
              $out[$row[$key]] = $row;
              }
              $array = array_values($out);

               return  $array;

                }



    public static function seo_friendly_string($string){
    $string = str_replace(array('[\', \']'), '', $string);
     $string = str_replace(array('ī'), 'i', $string);
    $string = preg_replace('/\[.*\]/U', '', $string);
    $string = preg_replace('/&(amp;)?#?[a-z0-9]+;/i', '-', $string);
    $string = htmlentities($string, ENT_COMPAT, 'utf-8');
    $string = preg_replace('/&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);/i', '\\1', $string );
    $string = preg_replace(array('/[^a-z0-9]/i', '/[-]+/') , ' ', $string);
    return strtolower(trim($string, ' '));
}


    public static function checkDownlaodfile(){


      $userSubscriptiondata= DB::table('userpackages')->join('packages', 'userpackages.package_id', '=', 'packages.id')->where('userpackages.user_id',Auth::id())->first();
            $subscriptiondatacheck;
            if ($userSubscriptiondata!=null) {
            $timestemp=$userSubscriptiondata->updated_at;
             
            $membershipEnd=date("y-m-d",strtotime(date("y-m-d",strtotime($timestemp))."+ ".$userSubscriptiondata->days." day" ));
          
              if (date("y-m-d")<$membershipEnd) {
                      $subscriptiondatacheck=true;
              
              }else {

                      $subscriptiondatacheck=false;
                
              }
               }else{
                   $subscriptiondatacheck=false;

               }

               return  $subscriptiondatacheck;


  }






}
 




?>