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
//show single user
Route::get('/user/profile/{id}', 'UserController@show_user');
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
	//user ratings and reviews
	Route::post('/post/review', 'UserController@post_review');

	//classifieds controller
	Route::get('/jobs/assigned', function(){
		$ads = App\Classified::where('status', 'Assigned')->orWhere('status', 'Completed')->get();
		return view('classified.assigned', compact('ads'));
	});
	Route::resource('/classified', 'ClassifiedsController');
	//show a single ad
	Route::get('/job/ad/{id}', function($id){
		$ad = App\Classified::find($id);
		return view('classified.single', compact('ad'));
	});



	//bid controller
	Route::get('bid/status/{bid}/{status}', 'BidController@status');
	Route::resource('/bid', 'BidController');

	//messages
	Route::get('message/{id}', function($id){
		$user = App\User::find($id);
		$count = count(App\Message::where(['sender_id' => Auth::user()->id, 'recipient_id' => $user->id])->orWhere(['sender_id' => $user->id, 'recipient_id' =>Auth::user()->id])->get());
		$count -= 6;
		$messages = App\Message::where(['sender_id' => Auth::user()->id, 'recipient_id' => $user->id])->orWhere(['sender_id' => $user->id, 'recipient_id' =>Auth::user()->id])->skip($count)->take(6)->get();
		return view('layouts.message', compact('user', 'messages'));
	});
	Route::resource('/message', 'MessageController');
	Route::get('/home', 'HomeController@index')->name('home');

});
