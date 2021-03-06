<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;
use App\Classified;
use App\Review;
class UserController extends Controller
{
    //
	public function update_profile(Request $request){
		$user = Auth::user();
		$user->update($request->all());
		return back()->with('status', 'Changes saved');
	}

	//change the user's password
	public function update_password(Request $request){
		if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
		// The passwords matches
		//dd('wrong password');
		return redirect()->back()->with("password","Your current password does not matches with the password you provided. Please try again.");

		}

		if(strcmp($request->get('current-password'), $request->get('password')) == 0){
		//Current password and new password are same
		return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
		}
		$validatedData = $request->validate([
		'current-password' => 'required',
		'password' => 'required|string|min:6|confirmed',
		]);
		//Change Password
		$user = Auth::user();
		$user->password = bcrypt($request->get('password'));
		$user->save();
	}

	//post user review
	public function post_review(Request $request){

		$ad = Classified::find($request->ad_id);
		$review = new Review($request->all());
		$review->user_id = $ad->assigned_to;
		$review->save();
		return back()->with('status', 'Your job review has been posted!');
	}

	//show a user
	public function show_user($id){
		$user = User::find($id);
		$rating = ceil(Review::where('user_id', $id)->avg('rating'));

		return view('user.show', compact('user', 'rating'));
	}
}
