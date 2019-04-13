<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Rate;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $profile = User::find($id);
        return view('profiles.index')->with('profile', $profile);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile = User::find($id);
        return $id;
        return view('profiles.show')->with('profile', $profile);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = User::find($id);
        // return $profile->rate->basic;
        return view('profiles.edit')->with('profile', $profile);
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
        // $this->validate($request, [
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        // ]);

        $profile = User::find($id);
        $profile->name = $request->input('name');
        $profile->email = $request->input('email');
        $profile->last_name = $request->input('lastName');
        $profile->address = $request->input('address');
        $profile->movil = $request->input('movil');
        $profile->description = $request->input('description');
        $profile->save();

        if (User::find($id)->rate) {
            $rate = User::find($id)->rate;
            $rate->user_id = $id;
            $rate->basic = $request->input('basicRate');
            $rate->bathroom = $request->input('bathroomRate');
            $rate->bigsize = $request->input('bigTileRate');
            $rate->exterior = $request->input('exteriorRate');
            $rate->save();
        } else {
            $rate = new Rate;
            $rate->user_id = $id;
            $rate->basic = $request->input('basicRate');
            $rate->bathroom = $request->input('bathroomRate');
            $rate->bigsize = $request->input('bigTileRate');
            $rate->exterior = $request->input('exteriorRate');
            $rate->save();
        }
                
        return redirect('/home');
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
