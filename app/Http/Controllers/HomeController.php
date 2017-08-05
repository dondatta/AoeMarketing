<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

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

        // $this->middleware('subscribed');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function show(Request $request)
    {
	    $items = [];


	    if($request->has('username')){


		    $client = new \GuzzleHttp\Client;

		    $url = sprintf('https://www.instagram.com/%s/media', $request->input('username'));

		    $response = $client->get($url);

		    $items = json_decode((string) $response->getBody(), true)['items'];


	    }


	    return view('home',compact('items'));
    }



}
