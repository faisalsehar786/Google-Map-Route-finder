<?php
namespace App\Http\Controllers;
 
use FarhanWazir\GoogleMaps\GMaps;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use Excel;
use CH;
use Carbon\Carbon;
use App\User;
use Carbon\CarbonInterval;
use Illuminate\Support\Facades\Crypt;

class MapController extends Controller
{
protected $gmap;
public function __construct(GMaps $gmap){
  
$this->gmap = $gmap;
} 
public function index(){





$config['map_height'] = "459px";
$config['center'] = 'Italy';
$config['zoom']='10';
$config['places'] = true;
$config['placesAutocompleteInputID'] = 'myPlaceTextBox';
$config['placesAutocompleteBoundsMap'] = TRUE; // set results biased towards the maps viewport
$config['placesAutocompleteOnChange'] = '';
// $config['geocodeCaching'] =true;
$config['clusterZoomOnClick'] =true;

//$marker['onclick']= 'makerOptionsModal(event);';
 // dd(json_encode(session()->get('addMarkerModalLocations')));
$this->gmap->initialize($config);
// $addMarkerModalLocations=CH::validateSubscription(session()->get('addMarkerModalLocations'));
//$request->session()->forget('addMarkerModalLocations');
//dd(array_unique($addMarkerModalLocations));
// if ($addMarkerModalLocations !=null) {
//   $countnum=0;
// foreach ($addMarkerModalLocations as $addmarkerLocation) {
//   $countnum++;
// $marker['position'] =$addmarkerLocation;
// $marker['infowindow_content'] = $addmarkerLocation;
// $marker['icon'] = 'https://chart.apis.google.com/chart?chst=d_map_spin&chld=1|0|FF0000|12|_|'.$countnum.'';
// $this->gmap->add_marker($marker);

// }
// }
$map = $this->gmap->create_map(); // This object will render javascript files and map view; you can call JS by $map['js'] and map view by $map['html']
//session()->flash('success', 'Wellcome Everything is Working Fine');



return view('map', ['map' => $map]);
}
 

public function directions(Request $request){

  


 


  $downloadArray=CH::unique_array(session()->get('downloadSessionMake'),'address');

  

$datadownloadRoute = array_reverse($downloadArray);





$drawRoutlocations = CH::validateSubscription(session()->get('addMarkerModalLocations'));



$config['map_height'] = "459px";
$config['center'] = 'Italy';

if ($request->zoom=='zoomdefault') {

  
$config['zoom']='auto'; 
}else {

  $config['zoom']=$request->zoom; 
}

$config['places'] = true;
$config['placesAutocompleteInputID'] = 'myPlaceTextBox';
$config['placesAutocompleteBoundsMap'] =true; // set results biased towards the maps viewport
$config['placesAutocompleteOnChange'] = '';
// $config['geocodeCaching'] =true;

$config['directions'] = true;

$addMarkerModalLocations=  CH::validateSubscription(session()->get('addMarkerModalLocations'));



$refineWaypoints=$drawRoutlocations;



if ($request->startingPoint=='startpointdefault') {
  $config['directionsStart']=current($drawRoutlocations);
   $stdirection=current($datadownloadRoute);
  session()->put('startdirection',$stdirection['address']);
   $refineWaypoints=array_diff($refineWaypoints, array(current($drawRoutlocations)));

  $countnum2=1;
  $marker['position'] =current($drawRoutlocations);
$marker['infowindow_content'] =current($drawRoutlocations);
$marker['icon'] = 'https://chart.apis.google.com/chart?chst=d_map_spin&chld=1|0|FF0000|12|_|'.$countnum2.'';
$this->gmap->add_marker($marker);

}else{
$config['directionsStart'] =CH::seo_friendly_string($request->startingPoint);
 $refineWaypoints=array_diff($refineWaypoints, array(CH::seo_friendly_string($request->startingPoint)));
 session()->put('startdirection',CH::seo_friendly_string($request->startingPoint));
 $countnum2=1;
  $marker['position'] =$request->startingPoint;
$marker['infowindow_content'] =$request->startingPoint;
$marker['icon'] = 'https://chart.apis.google.com/chart?chst=d_map_spin&chld=1|0|FF0000|12|_|'.$countnum2.'';
$this->gmap->add_marker($marker);

}
if ($request->endingPoint=='endpointdefault') {
  $config['directionsEnd'] = end($drawRoutlocations);
   $stdirectionend=end($datadownloadRoute);
    session()->put('enddirection', $stdirectionend['address']);
  $refineWaypoints=array_diff($refineWaypoints, array(end($drawRoutlocations)));

    $countnum3=count($drawRoutlocations);
  $marker['position'] =end($drawRoutlocations);
$marker['infowindow_content'] =end($drawRoutlocations);
$marker['icon'] = 'https://chart.apis.google.com/chart?chst=d_map_spin&chld=1|0|FF0000|12|_|'.$countnum3.'';
$this->gmap->add_marker($marker);

}else{
$config['directionsEnd'] = CH::seo_friendly_string($request->endingPoint);
session()->put('enddirection',CH::seo_friendly_string($request->endingPoint));
$refineWaypoints=array_diff($refineWaypoints, array(CH::seo_friendly_string($request->endingPoint)));
  


$countnum3=count($drawRoutlocations);
  $marker['position'] =$request->endingPoint;
$marker['infowindow_content'] =$request->endingPoint;
$marker['icon'] = 'https://chart.apis.google.com/chart?chst=d_map_spin&chld=1|0|FF0000|12|_|'.$countnum3.'';
$this->gmap->add_marker($marker);



}

if ($request->travelMode=='DRIVING') {
  $config['directionsMode']='DRIVING';
}else{
  
$config['directionsMode'] = $request->travelMode; 
}


if (count($refineWaypoints)>0) {
   
   $config['directionsWaypointArray']=CH::validateSubscription($refineWaypoints);
 } 



// dd($addMarkerModalLocations);


if ($addMarkerModalLocations !=null && count($addMarkerModalLocations)>2) {

  session()->put('activedownload','ok');




  $countnum=1;
foreach (CH::validateSubscription($refineWaypoints) as $key => $addmarkerLocation) {

  $countnum++;
$marker['position'] =$addmarkerLocation;
$marker['infowindow_content'] = $addmarkerLocation;
$marker['icon'] = 'https://chart.apis.google.com/chart?chst=d_map_spin&chld=1|0|FF0000|12|_|'.$countnum.'';
$this->gmap->add_marker($marker);

}

}
elseif($addMarkerModalLocations !=null && count($addMarkerModalLocations)>1) {

  session()->put('activedownload','ok');


  
 $config['directionsWaypointArray']=$addMarkerModalLocations;

}else {

  session()->flash('error', 'For find Route Minimumm 2 Address Requried');
    return redirect()->route('mainhome');
}


// $config['directionsDivID'] = 'directionsDiv';
$config['cluster'] = true;

$this->gmap->initialize($config);

// $polyline['points'] =$refineWaypoints;
// $this->gmap->add_polyline($polyline);
$map = $this->gmap->create_map();

return view('map', ['map' => $map]);
}




public function addSingleMarker(Request $request)
{
$config['map_height'] = "459px";
$config['center'] = 'Italy';
$config['zoom']='auto';
$config['places'] = true;
$config['placesAutocompleteInputID'] = 'myPlaceTextBox';
$config['placesAutocompleteBoundsMap'] = true; // set results biased towards the maps viewport
$config['placesAutocompleteOnChange'] = '';
// $config['geocodeCaching'] =true;
$this->gmap->initialize($config);
$locations=CH::seo_friendly_string($request->routsearchLocation);


CH::puttlocationGetoutPutForxl($locations,"no","no","no");
$request->session()->push('addMarkerModalLocations',  $locations);
$addMarkerModalLocations= CH::validateSubscription(session()->get('addMarkerModalLocations'));


if ($addMarkerModalLocations !=null) {
  $countnum=0;
   foreach (array_unique($addMarkerModalLocations) as $addmarkerLocation) {
    $countnum++;
$marker['position'] =$addmarkerLocation;
$marker['infowindow_content'] = $addmarkerLocation;
$marker['icon'] = 'https://chart.apis.google.com/chart?chst=d_map_spin&chld=1|0|FF0000|12|_|'.$countnum.'';
$this->gmap->add_marker($marker);
} 
}


$map = $this->gmap->create_map(); // This object will render javascript files and map view; you can call JS by $map['js'] and map view by $map['html']
return view('map', ['map' => $map]);
}
 



public function addMultipleMarkerbluck(Request $request)
{





$getsessionValprev=$request->session()->get('addMarkerModalLocations');
$mergcurrentoldLocations;

if (!empty($request->textimportAddress)) {

$stringsarray=explode(PHP_EOL, $request->textimportAddress);


$validateStrin_array=[];
foreach ($stringsarray as $string) {
  
  array_push($validateStrin_array,CH::seo_friendly_string($string));

}


$texteara_array=array_filter($validateStrin_array);

if ($getsessionValprev!=null) {
    session()->flash('info', 'Previous location Added into new for latest location Reset and import again');
  $mergcurrentoldLocations=array_merge($texteara_array,$getsessionValprev);
}else{
  $mergcurrentoldLocations=$texteara_array;
}

          
        }else{


        $extension = strtolower($request->file('importlocFile')->getClientOriginalExtension());
        $checkExtension=in_array($extension, ['csv', 'xls', 'xlsx']);

       if ($checkExtension) {
       
         $path = $request->file('importlocFile')->getRealPath();
        $data = Excel::load($path)->get();
   
           if($data->count()){

              $arrfromfilematchdownload=[];

            foreach ($data as $key => $value) {

             if ($value->deliveryaddress==null || $value->deliveryaddress=='') {
                session()->flash('opensamplefilemodal','ok');
               return redirect()->route('resetAll');

             }
                 
               
               CH::puttlocationGetoutPutForxl(CH::seo_friendly_string($value->deliveryaddress),$value->orderid,$value->customerfullname,$value->comments);
       

                $arrfromfile[] =CH::seo_friendly_string( $value->deliveryaddress);
            }
        

        
         
        }
      
       }else {
           session()->flash('error', 'Please Enter System Supported Formate of File csv xls xlsx ');
       }




if ($getsessionValprev!=null) {
    session()->flash('info', 'Previous location Added into new for latest location Reset and import again');
 $mergcurrentoldLocations= array_merge($arrfromfile,$getsessionValprev);
}else {
   $mergcurrentoldLocations= $arrfromfile;
}


        }




// dd($getsessionValprev);


$config['map_height'] = "459px";
$config['center'] = 'Italy';
$config['zoom']='auto';
$config['places'] = true;
$config['placesAutocompleteInputID'] = 'myPlaceTextBox';
$config['placesAutocompleteBoundsMap'] = true; // set results biased towards the maps viewport
$config['placesAutocompleteOnChange'] = '';
// $config['geocodeCaching'] =true;
$this->gmap->initialize($config); 



// $string = trim(preg_replace('/\s+/', ' ', $request->textimportAddress));



$request->session()->put('addMarkerModalLocations', array_filter($mergcurrentoldLocations));
$addMarkerModalLocations= CH::validateSubscription(session()->get('addMarkerModalLocations'));

//dd(array_unique($addMarkerModalLocations) );

if ($addMarkerModalLocations !=null) {
  $countnum=0;



              
   foreach (array_unique($addMarkerModalLocations) as $addmarkerLocation) {

CH::puttlocationGetoutPutForxl($addmarkerLocation,"no","no","no");
  
    $countnum++;
$marker['position'] =$addmarkerLocation;
$marker['infowindow_content'] = $addmarkerLocation;
$marker['icon'] = 'https://chart.apis.google.com/chart?chst=d_map_spin&chld=1|0|FF0000|12|_|'.$countnum.'';
$this->gmap->add_marker($marker);
} 
}


$map = $this->gmap->create_map(); // This object will render javascript files and map view; you can call JS by $map['js'] and map view by $map['html']
return view('map', ['map' => $map]);

}






public function streetViewof_loc(Request $request)
{ 

$string = htmlentities($request->locvaL, null, 'utf-8');
$content = str_replace("nbsp", "", $string);

 $content = html_entity_decode($content);

  
return json_encode(Crypt::encryptString($content));

}



public function streetViewof_locnewwindow($loc){

 

$config['map_height'] = "459px";
$config['center'] =Crypt::decryptString($loc);
$config['map_type'] = 'STREET';
$config['streetViewPovHeading'] = 90;
$this->gmap->initialize($config);
$map = $this->gmap->create_map();
return view('map', ['map' => $map]);

}




function resetAll()
{





session()->forget('addMarkerModalLocations');
session()->forget('showSubscriptionAlert');
session()->forget('downloadSessionMake');
session()->forget('noresultFoundAddress');
session()->forget('havapackage');
session()->forget('upgradesubs');
session()->forget('activedownload');


$config['map_height'] = "459px";
$config['center'] = 'Italy';
$config['zoom']='auto';
$config['places'] = TRUE;
$config['placesAutocompleteInputID'] = 'myPlaceTextBox';
$config['placesAutocompleteBoundsMap'] = TRUE; // set results biased towards the maps viewport
$config['placesAutocompleteOnChange'] = '';
// $config['geocodeCaching'] =true;
$this->gmap->initialize($config);
$map = $this->gmap->create_map(); 
    return view('map', ['map' => $map]);
}








public function preparedownloadExcel(Request $request){

 // json_decode($request->startEndDes);
 //  return   json_decode($request->dataWaypoints);

return 'ok';

}



 public function downloadExcel(Request $request)
    {
       


       if (CH::checkDownlaodfile()) {
         

           $mytime =Carbon::now();        

        $downloadArray=CH::unique_array(session()->get('downloadSessionMake'),'address');


        if (count($downloadArray)<2) {

          

          session()->flash('error', 'For Download Route Minimumm 2 Address Requried');
         return redirect()->route('mainhome');
        }
          
        $data = array_reverse($downloadArray);
         
       
        

          
             $start;
             $end;
             foreach ($data as $key => $value) {
                foreach($value as $value2){
                if ($value2== session()->get('startdirection')) {
                 
                  $start=$data[$key];
                   unset($data[$key]);
                }
                 if( $value2==session()->get('enddirection')) {
                
                    $end=$data[$key];
                     unset($data[$key]);
                }
                
                }

             }
             
             array_unshift($data ,$start);

              array_push($data ,$end);
            

         
              
            
               $expoertarray=[];
                 $length = count($data);
                  $fromTo=0;
                for ($i = 0; $i < $length; $i++) {

            
                    if ($i == $length - 1) {
                        break;
                           }

                     $fromTo=$fromTo+1;
                     array_push($expoertarray,[
                    'Priority'=>'1',
                    'Imei'=>'',
                    'Title'=> $data[$i]['customerfullname'],
                    'Pickup_address'=>$data[$i]['address'],
                    'Pickup_address_lat'=>$data[$i]['latitude'],
                    'Pickup_address_lng'=>$data[$i]['longitude'] ,
                    'Delivery_address'=>$data[$fromTo]['address'] ,
                    'Delivery_address_lat'=>$data[$fromTo]['latitude'],
                    'Delivery_address_lng'=>$data[$fromTo]['longitude'],
                    'Invoice_number'=>$data[$i]['orderId'],
                    'Comment'=>$data[$i]['comments'],
                    'Pickup_time_from'=> $mytime->toDateTimeString(),
                    'Pickup_time_to'=>$mytime->toDateTimeString(),
                    'Delivery_time_from'=> $mytime->addHour(),
                    'Pelivery_time_to'=>$mytime->addHour(),
                    'Email'=>'abc@gmail.com',


                    ]);
                   }
     
             return Excel::create('PaidExportRouteLocationFile', function($excel) use ($expoertarray) {
            $excel->sheet('mySheet', function($sheet) use ($expoertarray)
            {
                $sheet->fromArray($expoertarray);
            });
        })->download($request->typefile);
      

       
       }else {

           $mytime =Carbon::now();        

        $downloadArray=CH::unique_array(session()->get('downloadSessionMake'),'address');


        if (count($downloadArray)<2) {

          

          session()->flash('error', 'For Download Route Minimumm 2 Address Requried');
         return redirect()->route('mainhome');
        }
          
        $data = array_reverse($downloadArray);
         
       
        

          
             $start;
             $end;
             foreach ($data as $key => $value) {
                foreach($value as $value2){
                if ($value2== session()->get('startdirection')) {
                 
                  $start=$data[$key];
                   unset($data[$key]);
                }
                 if( $value2==session()->get('enddirection')) {
                
                    $end=$data[$key];
                     unset($data[$key]);
                }
                
                }

             }
             
             array_unshift($data ,$start);

              array_push($data ,$end);
            

         
              
            
               $expoertarray=[];
                 $length = count($data);
                  $fromTo=0;
                for ($i = 0; $i < $length; $i++) {

            
                    if ($i == $length - 1) {
                        break;
                           }

                     $fromTo=$fromTo+1;
                     array_push($expoertarray,[
                  
                    'Pickup_address'=>$data[$i]['address'],
                    'Pickup_address_lat'=>$data[$i]['latitude'],
                    'Pickup_address_lng'=>$data[$i]['longitude'] ,
                    'Delivery_address'=>$data[$fromTo]['address'] ,
                    'Delivery_address_lat'=>$data[$fromTo]['latitude'],
                    'Delivery_address_lng'=>$data[$fromTo]['longitude']
                   
                    ]);
                   }
     
             return Excel::create('FreeExportRouteLocationFile', function($excel) use ($expoertarray) {
            $excel->sheet('mySheet', function($sheet) use ($expoertarray)
            {
                $sheet->fromArray($expoertarray);
            });
        })->download($request->typefile);
      
         
       }
         

  

       }

















}