<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use stdClass;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('index')->with('users', $users);
    }

    public function aboutus()
    {
        return view('aboutus');
    }

    public function search(Request $request)
    {
        // Calculate quantity of piece of tile
        $widthTile = $request->input('widthTile');
        $heightTile = $request->input('heightTile');
        $sqfTile = $request->input('sqfTile');
        $qtOfTile = $sqfTile / (($widthTile * $heightTile)/144);
        // $bathroom = $request->input('bathroom');
        // $exterior = $request->input('exterior');
        $placeInstall = $request->input('placeInstall');

        $users = User::all();

        $qUsers = [];

        foreach ($users as $key => $user ) {

            $priceBasic = $user->rate ? $user->rate->basic : 0;
            // $priceBathroom = $bathroom ? ($user->rate ? $user->rate->bathroom : 0) : 0;
            $priceBathroom = ($placeInstall == 'bathroom') ? ($user->rate ? $user->rate->bathroom : 0) : 0;
            // $priceExterior = $exterior ? ($user->rate ? $user->rate->exterior : 0) : 0;
            $priceExterior = ($placeInstall == 'exterior') ? ($user->rate ? $user->rate->exterior : 0) : 0;
            $priceKitchen = ($placeInstall == 'kitchen') ? ($user->rate ? $user->rate->kitchen : 0) : 0;
            $priceBigTile =  ($widthTile * $heightTile > 1000) ? ($user->rate ? $user->rate->bigsize : 0) : 0;

            $object = new stdClass();
            $object->id = $user->id;
            $object->name = $user->name;
            $object->lastName = $user->last_name;
            $object->email = $user->email;
            $object->movil = $user->movil;
            $object->cover_image = $user->cover_image;
            $object->rateBasic = $priceBasic;
            $object->rateBathroom = $priceBathroom;
            $object->rateKitchen = $priceKitchen;
            $object->rateExterior = $priceExterior;
            $object->rateBigSize = $priceBigTile;
            $object->quotation = ($priceBasic + $priceBathroom + $priceBigTile + $priceKitchen + $priceExterior) * $sqfTile ;
            $object->numberOfPiece = round($qtOfTile);
            $object->heightTile = $heightTile;
            $object->widthTile = $widthTile;
            $object->placeInstall = $placeInstall;
            // $price = $user->rate->basic * $sqfTile;
            array_push($qUsers , $object);
        }

        // foreach($users as $user) {
        //     return $user->name;
        // }
        
        return view('search')->with('qUsers', $qUsers);
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
        //
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
