<?php

// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Methods'=> 'POST, GET, OPTIONS, PUT, DELETE");
// header("Access-Control-Allow-Headers'=> 'Content-Type, X-Auth-Token, Origin");


 // header('Access-Control-Allow-Origin: *');
 //    header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
 //    header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
 //    header('Access-Control-Allow-Credentials: true');
    


use Illuminate\Http\Request;

Route::get('item', ['uses' => 'RefItemController@apiItem','as' => 'api.item']);


Route::group(['middleware' => 'cors'],function(){
	Route::get('v1/user/', ['uses' => 'TrClaim@apiClaim','as' => 'api.apiClaim']);
});

Route::get('user/', ['uses' => 'TrClaim@apiClaim','as' => 'api.apiClaim']);


