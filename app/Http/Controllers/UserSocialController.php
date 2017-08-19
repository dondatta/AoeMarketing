<?php

namespace App\Http\Controllers;

use App\UserSocial;
use Illuminate\Http\Request;
use Auth;

class UserSocialController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usocial= UserSocial::all();
        return view('home.index', compact('usocial'));

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
        //dd($request);
        $this->validate(request(),[
            'instagram'=>'required',
            'facebook'=>'required',
            'twitter'=>'required'

        ]);

        UserSocial::create([
            'userid'=>auth()->id(),
            'instagram'=>Request('instagram'),
            'facebook'=>Request('facebook'),
            'twitter'=>Request('twitter')

        ]);


       return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserSocial  $userSocial
     * @return \Illuminate\Http\Response
     */
    public function show(UserSocial $userSocial)
    {
        $usocial= UserSocial::find(id);
        return view('home', compact('usocial'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserSocial  $userSocial
     * @return \Illuminate\Http\Response
     */
    public function edit(UserSocial $userSocial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserSocial  $userSocial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserSocial $userSocial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserSocial  $userSocial
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserSocial $userSocial)
    {
        //
    }
}
