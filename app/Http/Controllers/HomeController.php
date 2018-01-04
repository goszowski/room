<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

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
        return view('home');
    }

    public function setPosition(Request $request)
    {
        $data = $this->validate($request, [
            'lng' => 'required',
            'lat' => 'required',
        ]);

        Auth::user()->update([
            'lng' => $data['lng'],
            'lat' => $data['lat'],
        ]);
    }

    public function getPositions()
    {
        $positions = User::whereNotNull('lat')->whereNotNull('lng')->get();

        return response()->json($positions);
    }
}
