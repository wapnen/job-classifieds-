<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Classified;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Classified::where('user_id', Auth::user()->id)->paginate(10);

        return view('home', ['ads' => $ads]);
    }
}
