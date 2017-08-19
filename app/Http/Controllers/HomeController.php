<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Illuminate\Support\Facades\DB;

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
    public function show()
    {


	    $social = DB::table('user_socials')->where('userid', Auth::id())->value('instagram');

        if($social === NULL) {

           return view('userSocial.create');
        }
        else

	    $client = new \GuzzleHttp\Client;

	    $url = sprintf('https://www.instagram.com/%s/media', $social);

	    $response = $client->get($url);

	    $items = json_decode((string) $response->getBody(), true)['items'];


        return view('home',compact('items'));
    }



}
