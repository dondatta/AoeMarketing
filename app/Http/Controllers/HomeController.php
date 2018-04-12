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

	    $url = sprintf('https://www.instagram.com/%s/?__a=1', $social);

	   // $response = $client->get($url);

        //$items = array($response->getBody()->getContents());
	    //$items = json_decode((string) $response->getBody()->getContents(), true)['items'];

      //  var_dump($items);
      //  die();


        /////// CONFIG ///////
        $username = 'infatuationapparel';
        $password = '1219Whittier';
        $debug = false;
        $truncatedDebug = false;
        //////////////////////
           
        $ig = new \InstagramAPI\Instagram($debug, $truncatedDebug);


        try {
            $ig->login($username, $password);
        } catch (\Exception $e) {
            echo 'Something went wrong: '.$e->getMessage()."\n";
            exit(0);
        }

        $userId = $ig->people->getUserIdForName($social);

        $items = $ig->people->getInfoById($userId);







        //echo '<pre>' . var_export($items, true) . '</pre>';

        //echo $items->user->profile_pic_url;

return view('home',compact('items'));
    }



}
