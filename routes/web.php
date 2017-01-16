<?php

//Events
Event::listen('auth.last_login', function($user){
	$user->last_login = new DateTime;
	$user->save();
});


// Route::get('user/', ['uses' => 'TrClaim@apiClaim','as' => 'api.apiClaim']);


// 'cors' => \App\Http\Middleware\Cors::class, // <<< add this line
// Route::get('user/', ['uses' => 'TrClaim@apiClaim','as' => 'api.apiClaim']);

// Route::get('userApi', ['middleware' => 'cors', function()
// {
//     return \Response::json(\App\Brewery::with('beers', 'geocode')->paginate(10), 200);
// }]);
// Route::get('/', ['uses'=>'\App\Http\Controllers\Auth\LoginController@showLoginForm'] );



// Route::group(['middleware' => 'cors'], function()
// {
// 	Route::get('/v1/example/{code}', 'Controller@method');
// });





// For Guest
Route::group(['middleware' => 'guest'],function(){
	Route::get('/', ['uses'=>'\App\Http\Controllers\Auth\LoginController@showLoginForm'] );
	Route::get('register/token/{token}', 'Auth\RegisterController@verifylink');
	Route::get('register/resend/{mail}', 'Auth\RegisterController@SendMail');	
});



Route::group(['middleware' => 'auth'],function(){

// Pages	
	Route::get('/dashboard', 'PagesController@dashboard');
	Route::get('/settings', 'PagesController@settings');
	Route::post('/settings/update', ['uses' => 'PagesController@settingsUpdate','as' => 'settings.Update']);
	Route::get('/help', 'PagesController@help');
	Route::get('logout', 'Auth\LoginController@logout');


//user
	Route::delete('user/delete', ['uses' => 'RefUserController@delete','as' => 'user.delete']);

	Route::put('user/user/{id}', ['uses' => 'RefUserController@updatePassword','as' => 'user.pass']);
	Route::post('user/avatar/{id}', ['uses' => 'RefUserController@avatar','as' => 'user.avatar']);
	Route::post('user/deleteAvatar/{id}', ['uses' => 'RefUserController@deleteAvatar','as' => 'user.deleteAvatar']);

	Route::get('user/data', ['uses' => 'RefUserController@data','as' => 'user.data']);
	Route::get('user/profile/{id}', ['uses' => 'RefUserController@editProfile','as' => 'user.profile']);

	Route::resource('user', 'RefUserController');



//Role
	Route::delete('role/delete', ['uses' => 'RefRoleController@delete','as' => 'role.delete']);
	Route::get('role/data', ['uses' => 'RefRoleController@data','as' => 'role.data']);
	Route::get('role/permission/{roleId}', ['uses' => 'RefRoleController@createPermission','as' => 'role.createPermission']);
	Route::post('role/permission', ['uses' => 'RefRoleController@storePermission','as' => 'role.storePermission']);
	Route::put('role/permission/{roleID}', ['uses' => 'RefRoleController@updatePermission','as' => 'role.updatePermission']);
	Route::resource('role', 'RefRoleController');



	
});




// Make Auth
Auth::routes();











