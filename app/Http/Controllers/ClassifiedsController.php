<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classified;
use Auth;
use App\Bid;
class ClassifiedsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('classified.create');
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
       // dd($request->all());
        $request->validate([
            'title'=> 'required',
            'description'=> 'required', 
            'date'=> 'required|date|after_or_equal:today',
            'budget'=> 'required|numeric'
        ]);
        
        $ad = new Classified($request->all());
        $ad->user_id = Auth::user()->id;
        $ad->save();
        return redirect(url('/home'))->with('status', 'Job posted successfuly!');
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
        $ad = Classified::find($id);
        $bids = Bid::where('ad_id', $id)->get();
        return view('classified.show', compact('ad', 'bids'));
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
        $ad = Classified::find($id);
        return view('classified.edit', compact('ad'));
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
        $ad = Classified::find($id);
        $ad->update($request->all());
        return back()->with('status', 'Changes saved!');
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
}
