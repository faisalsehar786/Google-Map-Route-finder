<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

   Route::get('/clear', function() {

   Artisan::call('cache:clear');
   Artisan::call('config:clear');
   Artisan::call('config:cache');
   Artisan::call('view:clear');

   return "Cleared!";

});

Route::get('/', 'MapController@index')->name('mainhome');

Route::post('streetView', 'MapController@streetViewof_loc')->name('streetViewof_loc');
Route::get('streetView/{loc}', 'MapController@streetViewof_locnewwindow')->name('streetViewof_locnewwindow');

Route::post('/directions', 'MapController@directions')->name('directions');

Route::post('addSingleMarker', 'MapController@addSingleMarker')->name('addSingleMarker');
Route::post('addMultipleMarkerbluck', 'MapController@addMultipleMarkerbluck')->name('addMultipleMarkerbluck');
Route::get('resetAll', 'MapController@resetAll')->name('resetAll');

Auth::routes();

Route::get('payment', 'PaymentController@payment')->name('payment');


Route::post('subscribe', 'PaymentController@submitPayment')->name('subscribe');

Route::post('subscribebyPaypalcheck', 'PaymentController@subscribebyPaypalcheck')->name('subscribebyPaypalcheck');
Route::get('Paypalpaymentdone/{tid}','PaymentController@Paypalpaymentdone')->name('Paypalpaymentdone');
Route::post('updatesubscribtion', 'PaymentController@updatesubscribtion')->name('updatesubscribtion');


Route::post('/getPlainPrice', 'PaymentController@getPlainPrice')->name('getPlainPrice');

Route::get('profile', 'Profile@profile')->name('profile');

Route::post('updateProfile', 'Profile@updateProfile')->name('updateProfile');


Route::get('/home', 'HomeController@index')->name('home');

Route::post('preparedownloadExcel', 'MapController@preparedownloadExcel')->name('preparedownloadExcel');

Route::post('downloadExcel', 'MapController@downloadExcel')->name('downloadExcel');