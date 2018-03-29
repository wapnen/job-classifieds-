<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bid;
use Auth;
use App\User;
use App\Message;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewBid;
use App\Classified;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bids = Bid::where('user_id', Auth::user()->id)->get();
        return view('bids.bids', compact('bids'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $request->validate([
            'bid_amount'=> 'required|numeric'
        ]);
        //dd($request->all());
        $bid = new Bid($request->all());
        $bid->user_id = Auth::user()->id;
        $bid->save();

        //send notification to user
        $ad = Classified::find($bid->ad_id); 
        
        $recipient = User::find($ad->user_id);
         Mail::to($recipient)->send(new NewBid(Auth::user(), $recipient, $ad, $bid));
        return back()->with('status', "Your bid has been sent!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function status($id, $status){
        $bid = Bid::find($id);
        $bid->status = $status;
        $bid->save();


        //send email to artisan 
        if($status == 'Accepted'){
            $recipient = User::find($bid->user_id);

            //update ad status
            $ad = Classified::find($bid->ad_id);
            $ad->status = "Assigned";
            $ad->budget = $bid->bid_amount;
            $ad->assigned_to = $recipient->id;
            $ad->save();
            
            //compose message
            $message = new Message;
            $message->sender_id = Auth::user()->id;
            $message->recipient_id = $recipient->id;
            $message->message =  "Congratulations! Your bid has been accepted!";
            $send_email = Message::send_email(Auth::user(), $recipient, $message );
        }
        return back()->with('status', 'Status updated');
    }
}
