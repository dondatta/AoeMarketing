<?php
/**
 * Created by PhpStorm.
 * User: christopher
 * Date: 8/3/2017
 * Time: 8:48 PM
 */
namespace App\Http\Controllers;


use Illuminate\Http\Request;


use App\Http\Requests;


class InstagramController extends Controller

{

    /**

     * Get the index name for the model.

     *

     * @return string

     */

    public function index(Request $request)

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