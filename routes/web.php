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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group(['middleware' => 'auth'], function(){
	//user routes
	//show user profile page
	Route::get('/profile', function(){
		return view('user.profile');
	} );
	//update user's data
	Route::post('/profile', 'UserController@update_profile' );
	//update password
	Route::post('/password/update', 'UserController@update_password');
	//classifieds controller 
	Route::resource('/classified', 'ClassifiedsController');
	//show a single ad 
	Route::get('/job/ad/{id}', function($id){
		$ad = App\Classified::find($id);
		return view('classified.single', compact('ad'));
	});
	
	//bid controller 
	Route::resource('/bid', 'BidController');
	Route::get('/home', 'HomeController@index')->name('home');

});