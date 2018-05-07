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
        $ads = Classified::where('status', 'Active')->paginate(12);
        return view('classified.index', ['ads' => $ads]);
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
        $geocode = $this->getgeolocation($ad);
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
        $classified = Classified::find($id);
        $classified->delete();
        return redirect(url('/home'))->with('status', 'Deleted successfuly');
    }

    // get the long and latitude of a given address
    public function getgeolocation(Classified $ad){

      $string = $ad->address. ",". $ad->district.",". $ad->region;
      $string = preg_replace('/\s+/', '+', $string);
      $string = "https://maps.googleapis.com/maps/api/geocode/json?address=".$string.",GH&amp;key=AIzaSyDIEMkeGX6GupSLGpJfBK6jWudWVeSRq5U";
      $url = html_entity_decode($string);
      //dd($url);
      $options = array(
          "http"=>array(
              "header"=>"User-Agent: Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:10\r\n" // i.e. An iPad
          )
      );
      $context = stream_context_create($options);
      $request = file_get_contents($url , false, $context);
      $data = json_decode($request, true);

      if($data['status'] == "OK"){

        $location = $data['results'][0]['geometry']['location'];
        $lat = $location['lat'];
        $long = $location['lng'];
        $ad->lat = $lat;
        $ad->long = $long;
        $ad->save();

      }



    }
}
